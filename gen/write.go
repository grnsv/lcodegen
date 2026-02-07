package gen

import (
	"bytes"
	"context"
	"fmt"
	"os"
	"path/filepath"
	"regexp"
	"runtime"
	"runtime/pprof"
	"sync"
	"text/template"

	"github.com/go-faster/errors"
	"golang.org/x/sync/errgroup"

	"github.com/grnsv/lcodegen/gen/ir"
	"github.com/grnsv/lcodegen/internal/xmaps"
	"github.com/grnsv/lcodegen/ogenregex"
)

type TemplateConfig struct {
	Package           string
	Operations        []*ir.Operation
	DefaultOperations []*ir.Operation
	OperationGroups   []*ir.OperationGroup
	Webhooks          []*ir.Operation
	Types             map[string]*ir.Type
	Interfaces        map[string]*ir.Type
	Error             *ir.Response
	ErrorType         *ir.Type
	Servers           ir.Servers
	Securities        map[string]*ir.Security
	Router            Router
	WebhookRouter     WebhookRouter
	Imports           map[string]string

	PathsClientEnabled        bool
	PathsServerEnabled        bool
	WebhookClientEnabled      bool
	WebhookServerEnabled      bool
	OpenTelemetryEnabled      bool
	SecurityReentrantEnabled  bool
	RequestOptionsEnabled     bool
	RequestValidationEnabled  bool
	ResponseValidationEnabled bool
	EditorsEnabled            bool

	skipTestRegex *regexp.Regexp
}

// AnyClientEnabled returns true, if webhooks or paths client is enabled.
func (t TemplateConfig) AnyClientEnabled() bool {
	return t.PathsClientEnabled || t.WebhookClientEnabled
}

// AnyServerEnabled returns true, if webhooks or paths server is enabled.
func (t TemplateConfig) AnyServerEnabled() bool {
	return t.PathsServerEnabled || t.WebhookServerEnabled
}

// AnyInstrumentable returns true, if OpenTelemetry integration enabled and there is client/server to instrument.
func (t TemplateConfig) AnyInstrumentable() bool {
	return t.OpenTelemetryEnabled && (t.AnyClientEnabled() || t.AnyServerEnabled())
}

// ErrorGoType returns Go type of error.
func (t TemplateConfig) ErrorGoType() string {
	typ := t.ErrorType
	if typ.DoPassByPointer() {
		return "*" + typ.Go()
	}
	return typ.Go()
}

// SkipTest returns true, if test should be skipped.
func (t TemplateConfig) SkipTest(typ *ir.Type) bool {
	return t.skipTestRegex != nil && t.skipTestRegex.MatchString(typ.Name)
}

func (t TemplateConfig) collectStrings(cb func(typ *ir.Type) []string) []string {
	var (
		add  func(typ *ir.Type)
		m    = map[string]struct{}{}
		seen = map[*ir.Type]struct{}{}
	)
	add = func(typ *ir.Type) {
		_, skip := seen[typ]
		if typ == nil || skip {
			return
		}
		seen[typ] = struct{}{}
		for _, got := range cb(typ) {
			m[got] = struct{}{}
		}

		for _, f := range typ.Fields {
			add(f.Type)
		}
		for _, f := range typ.SumOf {
			add(f)
		}
		add(typ.AliasTo)
		add(typ.PointerTo)
		add(typ.GenericOf)
		add(typ.Item)
	}

	for _, typ := range t.Types {
		add(typ)
	}
	for _, typ := range t.Interfaces {
		add(typ)
	}
	if t.Error != nil {
		add(t.Error.NoContent)
		for _, media := range t.Error.Contents {
			add(media.Type)
		}
	}
	add(t.ErrorType)

	_ = walkOpTypes(t.Operations, func(t *ir.Type) error {
		add(t)
		return nil
	})
	_ = walkOpTypes(t.Webhooks, func(t *ir.Type) error {
		add(t)
		return nil
	})

	return xmaps.SortedKeys(m)
}

// RegexStrings returns slice of all unique regex validators.
func (t TemplateConfig) RegexStrings() []string {
	return t.collectStrings(func(typ *ir.Type) (r []string) {
		for _, exp := range []ogenregex.Regexp{
			typ.Validators.String.Regex,
			typ.Validators.Int.Pattern,
			typ.Validators.Float.Pattern,
			typ.MapPattern,
		} {
			if exp == nil {
				continue
			}
			r = append(r, exp.String())
		}
		return r
	})
}

// RatStrings returns slice of all unique big.Rat (multipleOf validation).
func (t TemplateConfig) RatStrings() []string {
	return t.collectStrings(func(typ *ir.Type) []string {
		if r := typ.Validators.Float.MultipleOf; r != nil {
			// `RatString` return a string with integer value if denominator is 1.
			//
			// That makes string representation of `big.Rat` shorter and simpler.
			// Also, it is better for executable size.
			return []string{r.RatString()}
		}
		return nil
	})
}

// FileSystem represents a directory of generated package.
type FileSystem interface {
	WriteFile(baseName string, source []byte) error
}

type writer struct {
	fs FileSystem
	t  *template.Template
}

// generatorBufSize is 1 MB, it's enough for most mid-size specs.
const generatorBufSize = 1024 * 1024

var bufPool = sync.Pool{
	New: func() interface{} {
		var b bytes.Buffer
		b.Grow(generatorBufSize)
		b.Reset()
		return &b
	},
}

func getBuffer() *bytes.Buffer {
	b := bufPool.Get().(*bytes.Buffer)
	b.Reset()
	return b
}

func putBuffer(b *bytes.Buffer) {
	if b.Cap() > generatorBufSize {
		return
	}
	bufPool.Put(b)
}

// Generate executes template to file using provided data.
func (w *writer) Generate(templateName, fileName string, data any) (rerr error) {
	buf := getBuffer()
	defer putBuffer(buf)

	if err := w.t.ExecuteTemplate(buf, templateName, data); err != nil {
		return errors.Wrap(err, "execute")
	}

	generated := buf.Bytes()
	defer func() {
		if rerr != nil {
			_ = os.WriteFile(fileName+".dump", generated, 0o644)
		}
	}()

	if err := w.fs.WriteFile(fileName, generated); err != nil {
		return errors.Wrap(err, "write")
	}

	return nil
}

// LaravelPaths contains paths for Laravel code generation.
type LaravelPaths struct {
	RoutesFile      string
	UserControllers string
	UserRequests    string
	Controllers     string
	Requests        string
	Responses       string
	Dto             string
}

// WriteSource writes generated definitions to fs.
func (g *Generator) WriteSource(fs FileSystem, pkgName string, laravelPaths LaravelPaths) error {
	w := &writer{
		fs: fs,
		t:  vendoredTemplates(),
	}

	grp, ctx := errgroup.WithContext(context.Background())
	grp.SetLimit(runtime.GOMAXPROCS(0))
	generate := func(templateName, fileName string, data any) {
		grp.Go(func() (err error) {
			labels := pprof.Labels("template", templateName)
			pprof.Do(ctx, labels, func(ctx context.Context) {
				err = w.Generate(templateName, fileName, data)
			})
			if err != nil {
				return errors.Wrapf(err, "template %q", templateName)
			}
			return nil
		})
	}

	generateWithUserFile := func(baseTemplate, userTemplate, baseDir, userDir, baseName, userName string, data any) {
		generate(baseTemplate, filepath.Join(baseDir, baseName), data)
		userFileName := filepath.Join(userDir, userName)
		if _, err := os.Stat(userFileName); err != nil {
			generate(userTemplate, userFileName, data)
		}
	}

	// Generate routes
	generate("routes", laravelPaths.RoutesFile, g.operationGroups)

	for _, group := range g.operationGroups {
		// Controller (base + user)
		generateWithUserFile(
			"controller/file", "user_controller/file",
			laravelPaths.Controllers, laravelPaths.UserControllers,
			fmt.Sprintf("%sController.php", group.Name), fmt.Sprintf("%sController.php", group.Name),
			group,
		)

		for _, op := range group.Operations {
			// Request (base + user)
			if op.Laravel.NeedsRequest {
				generateWithUserFile(
					"request/file", "user_request/file",
					laravelPaths.Requests, laravelPaths.UserRequests,
					fmt.Sprintf("%sRequest.php", op.Name), fmt.Sprintf("%sRequest.php", op.Name),
					op,
				)
				if op.Laravel.NeedsParamsDto {
					generate("params/file", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%sParams.php", op.Name)), op)
				}
			}

			// Response
			if name := op.Laravel.ResponseClassName; name != "" {
				generate("response/file", filepath.Join(laravelPaths.Responses, fmt.Sprintf("%s.php", name)), op)
			}
		}
	}

	// Webhook requests
	for _, op := range g.webhooks {
		if op.Laravel.NeedsRequest {
			generateWithUserFile(
				"request/file", "user_request/file",
				laravelPaths.Requests, laravelPaths.UserRequests,
				fmt.Sprintf("%sRequest.php", op.Name), fmt.Sprintf("%sRequest.php", op.Name),
				op,
			)
			if op.Laravel.NeedsParamsDto {
				generate("params/file", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%sParams.php", op.Name)), op)
			}
		}
	}

	// Error response
	if errType := g.ErrorType(); errType != nil {
		generate("error_response/file", filepath.Join(laravelPaths.Responses, "ErrorResponse.php"), errType)
	}

	// Enum classes
	for _, t := range g.EnumTypes() {
		generate("schema/enum", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%s.php", t.Name)), t)
	}

	// DTO classes
	for _, t := range g.DTOTypes() {
		generate("dto/file", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%s.php", t.Name)), t)
	}

	// Array alias DTO classes (typed collections)
	for _, t := range g.ArrayAliasDTOTypes() {
		generate("dto_array/file", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%s.php", t.Name)), t)
	}

	// Generic wrapper classes (OptString, OptNilBool, etc.)
	for _, t := range g.GenericTypes() {
		generate("optional/file", filepath.Join(laravelPaths.Dto, fmt.Sprintf("%s.php", t.Name)), t)
	}

	return grp.Wait()
}

// OperationGroups returns operation groups for Laravel generation.
func (g *Generator) OperationGroups() []*ir.OperationGroup {
	return g.operationGroups
}

// ErrorType returns the common error response type if available.
func (g *Generator) ErrorType() *ir.Response {
	return g.errType
}

// DTOTypes returns struct types that should be exposed as DTOs.
func (g *Generator) DTOTypes() []*ir.Type {
	return g.dtoTypes
}

// ArrayAliasDTOTypes returns alias types that wrap arrays (typed collections like Pets = []Pet).
func (g *Generator) ArrayAliasDTOTypes() []*ir.Type {
	return g.arrayAliasDTOs
}

// EnumTypes returns enum types that should be exposed as PHP enum classes.
func (g *Generator) EnumTypes() []*ir.Type {
	return g.enumTypes
}

// GenericTypes returns generic wrapper types (OptString, OptNilBool, etc.).
// Only includes types that are actually referenced by struct fields.
func (g *Generator) GenericTypes() []*ir.Type {
	return g.genericTypes
}
