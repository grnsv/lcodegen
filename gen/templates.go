package gen

import (
	"embed"
	"fmt"
	"slices"
	"strconv"
	"strings"
	"sync"
	"text/template"

	"github.com/go-faster/errors"
	"golang.org/x/exp/maps"

	"github.com/grnsv/lcodegen/gen/ir"
	"github.com/grnsv/lcodegen/internal/naming"
)

// OperationElem is variable name for generating per-operation functions.
type OperationElem struct {
	// Operation is the operation.
	Operation *ir.Operation
	// Config is the template configuration.
	Config TemplateConfig
}

// RouterElem is variable helper for router generation.
type RouterElem struct {
	// ParameterIndex is index of parameter of this route part.
	ParameterIndex int
	Route          *RouteNode
}

// DefaultElem is variable helper for setting default values.
type DefaultElem struct {
	// Type is type of this DefaultElem.
	Type *ir.Type
	// Var is decoding/encoding variable Go name (obj) or selector (obj.Field).
	Var string
	// Default is default value to set.
	Default ir.Default
}

// Elem is variable helper for recursive array or object encoding or decoding.
type Elem struct {
	// Sub whether this Elem has parent Elem.
	Sub bool
	// Type is type of this Elem.
	Type *ir.Type
	// Var is decoding/encoding variable Go name (obj) or selector (obj.Field).
	Var string
	// Tag contains info about field tags, if any.
	Tag ir.Tag
	// First whether this field is first.
	First bool
}

// NextVar returns name of variable for decoding recursive call.
//
// Needed to make variable names unique.
func (e Elem) NextVar() string {
	if !e.Sub {
		// No recursion, returning default name.
		return "elem"
	}
	return e.Var + "Elem"
}

type ResponseElem struct {
	Response *ir.Response
	Ptr      bool
}

// templateFunctions returns functions which used in templates.
func templateFunctions() template.FuncMap {
	return template.FuncMap{
		"errorf": func(format string, args ...any) (any, error) {
			return nil, errors.Errorf(format, args...)
		},
		"pascalSpecial": pascalSpecial,
		"camelSpecial":  camelSpecial,
		"capitalize":    naming.Capitalize,
		"upper":         strings.ToUpper,
		"lower":         strings.ToLower,
		"snakeCase":     snakeCase,
		"default": func(def, val any) any {
			if val == nil || val == "" {
				return def
			}
			return val
		},

		// Helpers for recursive encoding and decoding.
		"elem": func(t *ir.Type, v string) Elem {
			return Elem{
				Type: t,
				Var:  v,
			}
		},
		"pointer_elem": func(parent Elem) Elem {
			return Elem{
				Type: parent.Type.PointerTo,
				Sub:  true,
				Var:  parent.NextVar(),
			}
		},
		// Recursive array element (e.g. array of arrays).
		"sub_array_elem": func(parent Elem, t *ir.Type) Elem {
			return Elem{
				Type: t,
				Sub:  true,
				Var:  parent.NextVar(),
			}
		},
		// Initial array element.
		"array_elem": func(t *ir.Type) Elem {
			return Elem{
				Type: t,
				Sub:  true,
				Var:  "elem",
			}
		},
		"map_elem": func(t *ir.Type) Elem {
			return Elem{
				Type: t,
				Sub:  true,
				Var:  "elem",
			}
		},
		// Field of structure.
		"field_elem": func(f *ir.Field) Elem {
			return Elem{
				Type: f.Type,
				Var:  fmt.Sprintf("s.%s", f.Name),
				Tag:  f.Tag,
			}
		},
		"first_field_elem": func(f *ir.Field) Elem {
			return Elem{
				Type:  f.Type,
				Var:   fmt.Sprintf("s.%s", f.Name),
				Tag:   f.Tag,
				First: true,
			}
		},
		"response_elem": func(r *ir.Response, ptr bool) ResponseElem {
			return ResponseElem{
				Response: r,
				Ptr:      ptr,
			}
		},
		"router_elem": func(child *RouteNode, currentIdx int) RouterElem {
			if child.IsParam() {
				currentIdx++
			}
			return RouterElem{
				ParameterIndex: currentIdx,
				Route:          child,
			}
		},
		"default_elem": func(t *ir.Type, v string, value ir.Default) DefaultElem {
			return DefaultElem{
				Type:    t,
				Var:     v,
				Default: value,
			}
		},
		"sub_default_elem": func(t *ir.Type, v string, val any) DefaultElem {
			return DefaultElem{
				Type: t,
				Var:  v,
				Default: ir.Default{
					Value: val,
					Set:   true,
				},
			}
		},
		"op_elem": func(op *ir.Operation, cfg TemplateConfig) OperationElem {
			return OperationElem{
				Operation: op,
				Config:    cfg,
			}
		},
		"ir_media": func(e ir.Encoding, t *ir.Type) ir.Media {
			return ir.Media{
				Encoding: e,
				Type:     t,
			}
		},
		"print_php": ir.PrintPhpValue,
		// We use any to prevent template type matching errors
		// for type aliases (e.g. for quoting ir.ContentType).
		"quote": func(v any) string {
			// Fast path for string.
			if s, ok := v.(string); ok {
				return strconv.Quote(s)
			}
			return fmt.Sprintf("%q", v)
		},
		"backquote": func(v any) string {
			// Fast path for string.
			if s, ok := v.(string); ok && strconv.CanBackquote(s) {
				return "`" + s + "`"
			}
			return fmt.Sprintf("%#q", v)
		},
		"times": func(n int) []struct{} {
			return make([]struct{}, n)
		},
		"add": func(a, b int) int {
			return a + b
		},
		"div": func(a, b int) int {
			return a / b
		},
		"mod": func(a, b int) int {
			return a % b
		},
		"isObjectParam":                    isObjectParam,
		"paramObjectFields":                paramObjectFields,
		"uniqueResponseTypes":              uniqueResponseTypes,
		"dedupeVariantsByType":             dedupeVariantsByType,
		"needsArrayElementDiscrimination":  needsArrayElementDiscrimination,
		"dedupeVariantsByArrayElementType": dedupeVariantsByArrayElementType,
		"dedupeSumTypes":                   dedupeSumTypes,
		"isOptionalField":                  isOptionalField,
		"isInlineField":                    isInlineField,
		"isDeprecatedField":                isDeprecatedField,

		"array_rule_elem": func(prefix string, t *ir.Type) struct {
			Prefix string
			Type   *ir.Type
		} {
			return struct {
				Prefix string
				Type   *ir.Type
			}{Prefix: prefix, Type: t}
		},

		"responseContentType": responseContentType,
	}
}

//go:embed _template/*
var templates embed.FS

var _templates struct {
	sync.Once
	val *template.Template
}

// vendoredTemplates parses and returns vendored code generation templates.
func vendoredTemplates() *template.Template {
	_templates.Do(func() {
		tmpl := template.New("templates").Funcs(templateFunctions())
		tmpl = template.Must(tmpl.ParseFS(templates,
			"_template/*.tmpl",
			"_template/*/*.tmpl",
		))
		_templates.val = tmpl
	})
	return _templates.val
}

func isObjectParam(p *ir.Parameter) bool {
	if p.Spec != nil && p.Spec.Content != nil {
		// "content" encoding.
		return false
	}
	typ := p.Type
	if typ.IsGeneric() {
		typ = typ.GenericOf
	}

	return typ.IsStruct()
}

func paramObjectFields(typ *ir.Type) string {
	if typ.IsGeneric() {
		typ = typ.GenericOf
	}

	if !typ.IsStruct() {
		return "nil"
	}

	fields := make([]string, 0, len(typ.Fields))
	for _, f := range typ.Fields {
		if f.Spec == nil {
			continue
		}

		req := "false"
		if f.Spec.Required {
			req = "true"
		}

		fields = append(fields, "{Name:\""+f.Spec.Name+"\",Required:"+req+"}")
	}

	return "[]uri.QueryParameterObjectField{" + strings.Join(fields, ",") + "}"
}

// uniqueResponseTypes deduplicates response types by Type.Name to avoid duplicate case statements
// in type switches. When multiple responses share the same type (e.g., multiple patterns using the
// same schema), we only need one case statement.
func uniqueResponseTypes(responses []ir.ResponseInfo) []ir.ResponseInfo {
	seen := make(map[string]bool)
	var unique []ir.ResponseInfo

	for _, resp := range responses {
		if resp.RawResponse {
			// Raw responses are handled separately in the template
			continue
		}
		typeName := resp.Type.Name
		if !seen[typeName] {
			seen[typeName] = true
			unique = append(unique, resp)
		}
	}

	return unique
}

// dedupeVariantsByType deduplicates variants by their FieldType to avoid duplicate type checks.
// When multiple variants have the same field type (or no type discrimination), keep only unique entries.
func dedupeVariantsByType(variants []ir.UniqueFieldVariant) []ir.UniqueFieldVariant {
	if len(variants) == 0 {
		return variants
	}

	seen := make(map[string]bool)
	result := make([]ir.UniqueFieldVariant, 0, len(variants))

	for _, v := range variants {
		// If FieldType is empty (no type discrimination), include all variants
		if v.FieldType == "" || !seen[v.FieldType] {
			if v.FieldType != "" {
				seen[v.FieldType] = true
			}
			result = append(result, v)
		}
	}

	return result
}

// needsArrayElementDiscrimination checks if all variants have the same jx.Array FieldType
// but different ArrayElementTypes, requiring element-level discrimination.
func needsArrayElementDiscrimination(variants []ir.UniqueFieldVariant) bool {
	if len(variants) < 2 {
		return false
	}

	// All variants must be arrays
	for _, v := range variants {
		if v.FieldType != jxTypeArray {
			return false
		}
	}

	// Count unique element types
	uniqueElemTypes := make(map[string]bool)
	for _, v := range variants {
		if v.ArrayElementType != "" {
			uniqueElemTypes[v.ArrayElementType] = true
		}
	}

	return len(uniqueElemTypes) > 1
}

// dedupeVariantsByArrayElementType deduplicates array variants by their ArrayElementType.
// Used when all variants are arrays that need element-level discrimination.
func dedupeVariantsByArrayElementType(variants []ir.UniqueFieldVariant) []ir.UniqueFieldVariant {
	if len(variants) == 0 {
		return variants
	}

	seen := make(map[string]bool)
	result := make([]ir.UniqueFieldVariant, 0, len(variants))

	for _, v := range variants {
		// If ArrayElementType is empty, include the variant
		if v.ArrayElementType == "" || !seen[v.ArrayElementType] {
			if v.ArrayElementType != "" {
				seen[v.ArrayElementType] = true
			}
			result = append(result, v)
		}
	}

	return result
}

// dedupeSumTypes deduplicates sum type variants by their PHP type representation.
// Prevents rendering e.g. "array|array" when both KindArray and KindMap are in the sum.
func dedupeSumTypes(types []*ir.Type) []*ir.Type {
	seen := make(map[string]bool)
	result := make([]*ir.Type, 0, len(types))
	for _, t := range types {
		key := phpTypeKey(t)
		if !seen[key] {
			seen[key] = true
			result = append(result, t)
		}
	}
	return result
}

func phpTypeKey(t *ir.Type) string {
	switch {
	case t.IsArray(), t.IsMap():
		return "array"
	case t.IsAlias():
		return phpTypeKey(t.AliasTo)
	case t.IsPrimitive():
		return t.Primitive.String()
	default:
		return t.Name
	}
}

func isOptionalField(f *ir.Field) bool {
	t := f.Type
	return (t.IsPointer() && t.NilSemantic.Optional()) ||
		(t.IsGeneric() && t.GenericVariant.Optional)
}

func isInlineField(f *ir.Field) bool {
	return f.Inline != ir.InlineNone
}

func isDeprecatedField(f *ir.Field) bool {
	return f.Spec != nil && f.Spec.Schema != nil && f.Spec.Schema.Deprecated
}

// responseContentType returns the first type from the response contents.
func responseContentType(r *ir.Response) *ir.Type {
	if r == nil || len(r.Contents) == 0 {
		return nil
	}
	keys := maps.Keys(r.Contents)
	slices.Sort(keys)
	return r.Contents[keys[0]].Type
}
