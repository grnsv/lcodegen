package gen

import (
	"github.com/go-faster/errors"

	"github.com/grnsv/lcodegen/gen/ir"
	"github.com/grnsv/lcodegen/jsonschema"
)

func saveSchemaTypes(ctx *genctx, gen *schemaGen, refEncoding map[jsonschema.Ref]ir.Encoding) error {
	for _, t := range gen.side {
		if err := ctx.saveType(t); err != nil {
			return errors.Wrap(err, "save inlined type")
		}
	}

	for ref, t := range gen.localRefs {
		encoding := ir.EncodingJSON
		if e, ok := refEncoding[ref]; ok {
			encoding = e
		}
		if err := ctx.saveRef(ref, encoding, t); err != nil {
			return errors.Wrap(err, "save referenced type")
		}
	}
	return nil
}

type generateSchemaOverride struct {
	refEncoding map[jsonschema.Ref]ir.Encoding
	nameRef     func(ref jsonschema.Ref, def refNamer) (string, error)
	fieldMut    func(*ir.Field) error
	// request indicates this schema is for a request body (not response).
	// Used to decide how to handle empty schemas.
	request bool
}

func (g *Generator) generateSchema(
	ctx *genctx,
	name string,
	schema *jsonschema.Schema,
	optional bool,
	override *generateSchemaOverride,
) (_ *ir.Type, rerr error) {
	defer handleSchemaDepth(schema, &rerr)

	lookup := func(ref jsonschema.Ref) (*ir.Type, bool) {
		encoding := ir.EncodingJSON
		if o := override; o != nil {
			if e, ok := o.refEncoding[ref]; ok {
				encoding = e
			}
		}
		return ctx.lookupRef(ref, encoding)
	}

	gen := newSchemaGen(lookup)
	if o := override; o != nil {
		if n := o.nameRef; n != nil {
			prev := gen.nameRef
			gen.nameRef = func(ref jsonschema.Ref) (string, error) {
				return n(ref, prev)
			}
		}
		if m := o.fieldMut; m != nil {
			gen.fieldMut = m
		}
		gen.request = o.request
	}
	gen.log = g.log.Named("schemagen")
	gen.fail = g.fail
	gen.depthLimit = g.parseOpts.SchemaDepthLimit
	gen.imports = g.imports

	t, err := gen.generate(name, schema, optional)
	if err != nil {
		return nil, err
	}

	var refEncoding map[jsonschema.Ref]ir.Encoding
	if o := override; o != nil {
		refEncoding = o.refEncoding
	}
	if err := saveSchemaTypes(ctx, gen, refEncoding); err != nil {
		return nil, errors.Wrap(err, "save schema types")
	}

	return t, nil
}
