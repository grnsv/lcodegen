package gen

import (
	"os"
	"path/filepath"
	"slices"
	"strings"

	"github.com/go-faster/errors"
	"github.com/go-faster/yaml"
	"github.com/jinzhu/inflection"
	"go.uber.org/zap"
	"golang.org/x/exp/maps"

	ogen "github.com/grnsv/lcodegen"
	"github.com/grnsv/lcodegen/gen/ir"
	"github.com/grnsv/lcodegen/internal/xmaps"
	"github.com/grnsv/lcodegen/internal/xslices"
	"github.com/grnsv/lcodegen/jsonschema"
	"github.com/grnsv/lcodegen/openapi"
	"github.com/grnsv/lcodegen/openapi/parser"
)

// Generator is OpenAPI-to-Laravel generator.
type Generator struct {
	opt               GenerateOptions
	parseOpts         ParseOptions
	api               *openapi.API
	servers           []ir.Server
	operations        []*ir.Operation
	defaultOperations []*ir.Operation // Operations without an operation group.
	operationGroups   []*ir.OperationGroup
	webhooks          []*ir.Operation
	securities        map[string]*ir.Security
	tstorage          *tstorage
	errType           *ir.Response
	webhookRouter     WebhookRouter
	router            Router
	imports           map[string]string
	equalitySpecs     []*ir.EqualityMethodSpec // Types requiring Equal() methods for uniqueItems validation

	// Cached classified type lists, populated by prepareLaravelData.
	dtoTypes       []*ir.Type
	arrayAliasDTOs []*ir.Type
	enumTypes      []*ir.Type
	genericTypes   []*ir.Type

	log *zap.Logger
}

func expandSpec(api *openapi.API, p string) (err error) {
	p, err = filepath.Abs(filepath.Clean(p))
	if err != nil {
		return err
	}

	dir, _ := filepath.Split(p)
	if err := os.MkdirAll(dir, 0o750); err != nil {
		return err
	}

	spec, err := parser.Expand(api)
	if err != nil {
		return errors.Wrap(err, "expand")
	}

	data, err := yaml.Marshal(spec)
	if err != nil {
		return errors.Wrap(err, "marshal")
	}

	if err := os.WriteFile(p, data, 0o644); err != nil {
		return errors.Wrap(err, "write")
	}

	return nil
}

// NewGenerator creates new Generator.
func NewGenerator(spec *ogen.Spec, opts Options) (*Generator, error) {
	opts.setDefaults()

	var external jsonschema.ExternalResolver
	if opts.Parser.AllowRemote {
		external = jsonschema.NewExternalResolver(opts.Parser.Remote)
	}
	// Default: allow cross-type constraints unless explicitly set to false
	allowCrossType := true
	if opts.Parser.AllowCrossTypeConstraints != nil {
		allowCrossType = *opts.Parser.AllowCrossTypeConstraints
	}

	api, err := parser.Parse(spec, parser.Settings{
		External:                     external,
		File:                         opts.Parser.File,
		RootURL:                      opts.Parser.RootURL,
		InferTypes:                   opts.Parser.InferSchemaType,
		AllowCrossTypeConstraints:    allowCrossType,
		AuthenticationSchemes:        opts.Parser.AuthenticationSchemes,
		DisallowDuplicateMethodPaths: opts.Parser.DisallowDuplicateMethodPaths,
	})
	if err != nil {
		return nil, &ErrParseSpec{err: err}
	}

	if p := opts.ExpandSpec; p != "" {
		if err := expandSpec(api, p); err != nil {
			return nil, errors.Wrap(err, "expand spec")
		}
	}

	g := &Generator{
		opt:           opts.Generator,
		parseOpts:     opts.Parser,
		api:           api,
		servers:       nil,
		operations:    nil,
		webhooks:      nil,
		securities:    map[string]*ir.Security{},
		tstorage:      newTStorage(),
		errType:       nil,
		webhookRouter: WebhookRouter{},
		router:        Router{},
		imports:       defaultImports(),
		log:           opts.Logger,
	}

	if err := g.makeIR(api); err != nil {
		return nil, errors.Wrap(err, "make ir")
	}

	if err := g.route(); err != nil {
		return nil, &ErrBuildRouter{err: err}
	}

	return g, nil
}

func (g *Generator) makeIR(api *openapi.API) error {
	if err := g.makeServers(api.Servers); err != nil {
		return errors.Wrap(err, "servers")
	}
	if err := g.makeWebhooks(api.Webhooks); err != nil {
		return errors.Wrap(err, "webhooks")
	}
	if err := g.makeOps(api.Operations); err != nil {
		return errors.Wrap(err, "operations")
	}

	// Collect types that need Equal() and Hash() methods for complex uniqueItems validation
	g.collectEqualitySpecs()

	return nil
}

func (g *Generator) makeServers(servers []openapi.Server) error {
	for _, s := range servers {
		// Ignore servers without name.
		if s.Name == "" {
			continue
		}
		server, err := g.generateServer(s)
		if err != nil {
			return errors.Wrapf(err, "generate server %q", s.Name)
		}
		g.servers = append(g.servers, server)
	}
	return nil
}

func (g *Generator) makeOps(ops []*openapi.Operation) error {
	if err := g.reduceDefault(ops); err != nil {
		return errors.Wrap(err, "reduce default")
	}

	for _, spec := range ops {
		routePath := spec.Path.String()
		log := g.log.With(zapPosition(spec))

		if !g.opt.Filters.accept(spec) {
			log.Info("Skipping filtered operation")
			continue
		}

		ctx := &genctx{
			global: g.tstorage,
			local:  newTStorage(),
		}

		op, err := g.generateOperation(ctx, "", spec)
		if err != nil {
			err = errors.Wrapf(err, "path %q: %s",
				routePath,
				strings.ToLower(spec.HTTPMethod),
			)
			if err := g.trySkip(err, "Skipping operation", spec); err != nil {
				return err
			}
			continue
		}

		if err := fixEqualRequests(ctx, op); err != nil {
			return errors.Wrap(err, "fix requests")
		}
		if err := fixEqualResponses(ctx, op); err != nil {
			return errors.Wrap(err, "fix responses")
		}

		if err := g.tstorage.merge(ctx.local); err != nil {
			return err
		}

		g.operations = append(g.operations, op)
	}

	types := g.Types()
	for _, key := range xmaps.SortedKeys(types) {
		if t := types[key]; t.IsStruct() {
			if err := checkStructRecursions(t); err != nil {
				return errors.Wrap(err, t.Name)
			}
		}
	}

	fixPhpTypes(types)
	sortOperations(g.operations)
	_, g.operationGroups = groupOperations(g.operations, g.errType != nil)
	g.prepareLaravelData()

	return nil
}

func (g *Generator) makeWebhooks(webhooks []openapi.Webhook) error {
	for _, w := range webhooks {
		if w.Name == "" {
			rerr := errors.New("webhook name is empty")
			if err := g.trySkip(rerr, "Skipping webhook", w); err != nil {
				return err
			}
			continue
		}
		if len(w.Operations) == 0 {
			continue
		}

		whinfo := &ir.WebhookInfo{
			Name: w.Name,
		}
		for _, spec := range w.Operations {
			log := g.log.With(zapPosition(spec))

			if !g.opt.Filters.accept(spec) {
				log.Info("Skipping filtered operation")
				continue
			}

			spec.Parameters = xslices.Filter(spec.Parameters, func(p *openapi.Parameter) bool {
				if p.In.Path() {
					log.Warn("Webhooks can't have path parameters",
						zap.String("name", p.Name),
						zap.String("in", p.In.String()),
					)
					return false
				}
				return true
			})

			ctx := &genctx{
				global: g.tstorage,
				local:  newTStorage(),
			}

			op, err := g.generateOperation(ctx, w.Name, spec)
			if err != nil {
				err = errors.Wrapf(err, "webhook %q: %s",
					w.Name,
					strings.ToLower(spec.HTTPMethod),
				)
				if err := g.trySkip(err, "Skipping operation", spec); err != nil {
					return err
				}
				continue
			}
			op.WebhookInfo = whinfo

			if err := fixEqualRequests(ctx, op); err != nil {
				return errors.Wrap(err, "fix requests")
			}
			if err := fixEqualResponses(ctx, op); err != nil {
				return errors.Wrap(err, "fix responses")
			}

			if err := g.tstorage.merge(ctx.local); err != nil {
				return err
			}

			g.webhooks = append(g.webhooks, op)
		}
	}
	sortOperations(g.webhooks)
	return nil
}

func sortOperations(ops []*ir.Operation) {
	slices.SortStableFunc(ops, func(a, b *ir.Operation) int {
		return strings.Compare(a.Name, b.Name)
	})
}

func groupOperations(ops []*ir.Operation, hasErrorResponse bool) (
	defaultOperations []*ir.Operation,
	operationGroups []*ir.OperationGroup,
) {
	groups := make(map[string]*ir.OperationGroup)
	for _, op := range ops {
		groupName := inferControllerName(op)

		group, ok := groups[groupName]
		if !ok {
			group = &ir.OperationGroup{
				Name:             groupName,
				HasErrorResponse: hasErrorResponse,
			}
			groups[groupName] = group
		}
		group.Operations = append(group.Operations, op)
	}

	operationGroups = maps.Values(groups)
	slices.SortStableFunc(operationGroups, func(a, b *ir.OperationGroup) int {
		return strings.Compare(a.Name, b.Name)
	})

	return defaultOperations, operationGroups
}

// inferControllerName determines the controller name for an operation.
func inferControllerName(op *ir.Operation) string {
	// Use explicit operation group if specified
	if op.OperationGroup != "" {
		return op.OperationGroup
	}

	// Infer from path
	path := op.Spec.Path.String()
	return controllerNameFromPath(path)
}

// controllerNameFromPath extracts controller name from path.
// It skips common prefixes (api, v1, v2, etc.) and path parameters ({id})
// to find the first meaningful resource segment.
func controllerNameFromPath(path string) string {
	// Remove leading slash and split
	path = strings.TrimPrefix(path, "/")
	if path == "" {
		return "Default"
	}

	parts := strings.Split(path, "/")

	// Find the first meaningful segment, skipping common prefixes and path parameters.
	for _, segment := range parts {
		if segment == "" {
			continue
		}
		// Skip path parameters like {id}
		if strings.HasPrefix(segment, "{") && strings.HasSuffix(segment, "}") {
			continue
		}
		// Skip common API prefixes and version segments
		lower := strings.ToLower(segment)
		if lower == "api" || isVersionSegment(lower) {
			continue
		}

		singular := inflection.Singular(segment)
		name, err := pascalNonEmpty(singular)
		if err != nil {
			continue
		}
		return name
	}

	return "Default"
}

// isVersionSegment returns true for version-like path segments (v1, v2, v1.0, etc.).
func isVersionSegment(s string) bool {
	if len(s) < 2 || s[0] != 'v' {
		return false
	}
	// Check that everything after 'v' is digits or dots (v1, v2, v1.0, v10).
	for _, c := range s[1:] {
		if c != '.' && (c < '0' || c > '9') {
			return false
		}
	}
	return true
}

// phpReserved contains PHP reserved words that cannot be used as class or enum names.
// PHP keywords are case-insensitive, so all entries are stored in lowercase.
var phpReserved = map[string]struct{}{
	"abstract": {}, "and": {}, "array": {}, "as": {}, "bool": {},
	"break": {}, "callable": {}, "case": {}, "catch": {}, "class": {},
	"clone": {}, "const": {}, "continue": {}, "declare": {}, "default": {},
	"die": {}, "do": {}, "echo": {}, "else": {}, "elseif": {},
	"empty": {}, "enddeclare": {}, "endfor": {}, "endforeach": {}, "endif": {},
	"endswitch": {}, "endwhile": {}, "enum": {}, "eval": {}, "exit": {},
	"extends": {}, "false": {}, "final": {}, "finally": {}, "float": {},
	"fn": {}, "for": {}, "foreach": {}, "function": {}, "global": {},
	"goto": {}, "if": {}, "implements": {}, "include": {}, "instanceof": {},
	"insteadof": {}, "int": {}, "interface": {}, "isset": {}, "list": {},
	"match": {}, "mixed": {}, "namespace": {}, "never": {}, "new": {},
	"null": {}, "object": {}, "or": {}, "parent": {}, "print": {},
	"private": {}, "protected": {}, "public": {}, "readonly": {}, "require": {},
	"return": {}, "self": {}, "static": {}, "string": {}, "switch": {},
	"throw": {}, "trait": {}, "true": {}, "try": {}, "unset": {},
	"use": {}, "var": {}, "void": {}, "while": {}, "xor": {}, "yield": {},
}

// isPhpReserved checks if a name is a PHP reserved word (case-insensitive).
func isPhpReserved(name string) bool {
	_, ok := phpReserved[strings.ToLower(name)]
	return ok
}

// fixPhpTypes applies PHP-specific type mutations.
// Must be called after all types are generated but before grouping and metadata computation.
func fixPhpTypes(types map[string]*ir.Type) {
	// Convert empty structs to maps for PHP generation.
	// In PHP, type: object with no properties is a free-form associative array,
	// not an empty class. Mutating in-place so all references (Generic wrappers,
	// field types) see the change through pointers.
	for _, key := range xmaps.SortedKeys(types) {
		t := types[key]
		if t.IsStruct() && len(t.Fields) == 0 && !t.DenyAdditionalProps {
			t.Kind = ir.KindMap
			t.Item = ir.Any(nil)
		}
	}

	// Rename types whose names are PHP reserved words.
	// Mutating Name in-place propagates through all pointer references.
	for _, key := range xmaps.SortedKeys(types) {
		t := types[key]
		if isPhpReserved(t.Name) {
			t.Name = "X" + t.Name
		}
	}
}

const responseFieldName = "Response"

// prepareLaravelData precomputes all Laravel-specific metadata for operations,
// operation groups, and type lists. Called once at the end of makeOps.
func (g *Generator) prepareLaravelData() {
	for _, op := range g.operations {
		op.Laravel = computeOperationMeta(op)
	}
	for _, op := range g.webhooks {
		op.Laravel = computeOperationMeta(op)
	}
	for _, group := range g.operationGroups {
		group.Laravel = computeGroupMeta(group)
	}
	g.computeTypeLists()
}

// computeOperationMeta builds LaravelMeta for a single operation.
// Calls findSuccessResponse once and derives all response-related fields from it.
func computeOperationMeta(op *ir.Operation) *ir.LaravelMeta {
	m := &ir.LaravelMeta{
		NeedsRequest:    needsRequest(op),
		HasRequestBody:  op.Request != nil,
		NeedsParamsDto:  needsParamsDto(op),
		HasDefaults:     opHasDefaults(op),
		HasValidatedDto: hasValidatedDto(op),
	}

	if m.HasValidatedDto {
		m.ValidatedTypeName = validatedTypeName(op)
	}

	// Single call to findSuccessResponse — all response fields derive from this.
	code, resp := findSuccessResponse(op)

	// SuccessStatusCode
	if resp == nil {
		m.SuccessStatusCode = 200
	} else {
		m.SuccessStatusCode = code
	}

	// HasNoContent
	if resp != nil && resp.NoContent != nil {
		m.HasNoContent = true
	}

	// SuccessDescription
	if resp != nil && resp.Spec != nil {
		m.SuccessDescription = resp.Spec.Description
	}

	// SuccessWrapperType, SuccessType, SuccessItemType (from preferred media)
	if resp != nil {
		if media, ok := preferredMedia(resp.Contents); ok {
			t := media.Type

			// Check for wrapper type (has Response field)
			if t != nil && t.IsStruct() {
				for _, f := range t.Fields {
					if f.Name == responseFieldName {
						m.SuccessWrapperType = t
						t = f.Type
						break
					}
				}
			}

			// Unwrap alias types
			for t != nil && t.IsAlias() {
				t = t.AliasTo
			}
			m.SuccessType = t

			// Item type for arrays
			if t != nil && t.IsArray() && t.Item != nil {
				m.SuccessItemType = t.Item
			} else {
				m.SuccessItemType = t
			}
		}
	}

	// ResponseClassName
	if m.HasNoContent || m.SuccessType != nil {
		m.ResponseClassName = op.Name + "Response"
	}

	return m
}

// preferredMedia returns the media for the preferred content type from the response.
// Prefers "application/json", then "application/problem+json", then falls back to first entry.
func preferredMedia(contents map[ir.ContentType]ir.Media) (ir.Media, bool) {
	if len(contents) == 0 {
		return ir.Media{}, false
	}
	for _, ct := range []ir.ContentType{"application/json", "application/problem+json"} {
		if m, ok := contents[ct]; ok {
			return m, true
		}
	}
	keys := maps.Keys(contents)
	slices.Sort(keys)
	return contents[keys[0]], true
}

// findSuccessResponse returns the first success response (2xx) and its status code.
func findSuccessResponse(op *ir.Operation) (int, *ir.Response) {
	if op.Responses == nil {
		return 0, nil
	}
	codes := maps.Keys(op.Responses.StatusCode)
	slices.Sort(codes)
	for _, code := range codes {
		if code >= 200 && code <= 299 {
			if resp := op.Responses.StatusCode[code]; resp != nil {
				return code, resp
			}
		}
	}
	return 0, nil
}

// needsRequest returns true if the operation needs a Laravel FormRequest class.
func needsRequest(op *ir.Operation) bool {
	if op.HasQueryParams() || op.HasHeaderParams() {
		return true
	}
	if op.Request == nil {
		return false
	}
	for _, media := range op.Request.Contents {
		if requestBodyHasRules(media.Type) {
			return true
		}
	}
	return false
}

// requestBodyHasRules returns true if the type can produce Laravel validation rules.
// Structs and arrays can be validated; scalar types (primitives, enums) cannot.
func requestBodyHasRules(t *ir.Type) bool {
	switch {
	case t.IsPointer():
		return requestBodyHasRules(t.PointerTo)
	case t.IsGeneric():
		return requestBodyHasRules(t.GenericOf)
	case t.IsAlias():
		return requestBodyHasRules(t.AliasTo)
	case t.IsStruct(), t.IsArray():
		return true
	case t.IsMap():
		return t.Item != nil && !t.Item.IsAny()
	case t.IsSum():
		return slices.ContainsFunc(t.SumOf, requestBodyHasRules)
	default:
		return false
	}
}

// isInternalWrapper checks if a type is an internal wrapper type that shouldn't be exposed as a DTO.
//
// Types without Schema are synthesized by the IR (not derived from OpenAPI schemas):
//   - NoContent placeholders (gen_responses.go, responseToIR) — have only header/StatusCode fields
//   - Response wrappers from wrapResponseType — always have a "Response" field
//
// Wrapper types with a "Response" field (like ErrorStatusCode, PetsHeaders) carry meaningful
// data (headers, status codes) and should be kept as DTOs.
// Schema-derived types always have Schema set via ir constructors, so Schema==nil is safe here.
func isInternalWrapper(t *ir.Type) bool {
	if t.Schema != nil {
		return false
	}
	for _, f := range t.Fields {
		if f.Name == responseFieldName {
			return false
		}
	}
	return true
}

func needsParamsDto(op *ir.Operation) bool {
	return op.HasQueryParams() || op.HasHeaderParams()
}

// getBodyType extracts the underlying type from the request body,
// unwrapping Generic and Pointer wrappers.
func getBodyType(op *ir.Operation) *ir.Type {
	if op.Request == nil {
		return nil
	}
	t := op.Request.Type
	if t.IsGeneric() {
		t = t.GenericOf
	}
	if t.IsPointer() {
		t = t.PointerTo
	}
	return t
}

func hasValidatedDto(op *ir.Operation) bool {
	if op.HasQueryParams() || op.HasHeaderParams() {
		return true
	}
	t := getBodyType(op)
	if t == nil {
		return false
	}
	return t.IsStruct() || t.IsAlias()
}

func validatedTypeName(op *ir.Operation) string {
	if op.HasQueryParams() || op.HasHeaderParams() {
		return op.Name + "Params"
	}
	t := getBodyType(op)
	if t != nil {
		return t.Name
	}
	return op.Name + "Params"
}

func opHasDefaults(op *ir.Operation) bool {
	for _, p := range op.QueryParams() {
		if p.Default().Set {
			return true
		}
	}
	for _, p := range op.HeaderParams() {
		if p.Default().Set {
			return true
		}
	}
	if op.Request != nil {
		for _, media := range op.Request.Contents {
			if media.Type.HasDefaultFields() {
				return true
			}
		}
	}
	return false
}

// computeGroupMeta builds LaravelGroupMeta for an operation group.
func computeGroupMeta(group *ir.OperationGroup) *ir.LaravelGroupMeta {
	seen := make(map[string]bool)
	var classes []string

	for _, op := range group.Operations {
		if name := op.Laravel.ResponseClassName; name != "" {
			if !seen[name] {
				seen[name] = true
				classes = append(classes, name)
			}
		}
	}

	slices.Sort(classes)
	return &ir.LaravelGroupMeta{
		ResponseClasses: classes,
	}
}

// computeTypeLists populates the cached type list fields on Generator.
func (g *Generator) computeTypeLists() {
	referenced := make(map[string]bool)
	for _, t := range g.tstorage.types {
		for _, f := range t.Fields {
			if f.Type.IsGeneric() {
				referenced[f.Type.Name] = true
			}
		}
	}

	for _, t := range g.tstorage.types {
		switch {
		case t.Name == "":
			// skip unnamed types
		case t.IsStruct() && !isInternalWrapper(t):
			g.dtoTypes = append(g.dtoTypes, t)
		case t.IsAlias() && t.AliasTo != nil && t.AliasTo.IsArray():
			g.arrayAliasDTOs = append(g.arrayAliasDTOs, t)
		case t.IsEnum():
			g.enumTypes = append(g.enumTypes, t)
		case t.IsGeneric() && referenced[t.Name]:
			g.genericTypes = append(g.genericTypes, t)
		}
	}
}

// Types returns generated types.
func (g *Generator) Types() map[string]*ir.Type {
	return g.tstorage.types
}

// Operations returns generated operations.
func (g *Generator) Operations() []*ir.Operation {
	return g.operations
}

// Webhooks returns generated webhooks.
func (g *Generator) Webhooks() []*ir.Operation {
	return g.webhooks
}

// API returns api schema.
func (g *Generator) API() *openapi.API {
	return g.api
}
