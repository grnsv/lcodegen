package openapi

import (
	"github.com/grnsv/lcodegen/jsonschema"
	"github.com/grnsv/lcodegen/location"
)

// Example is an OpenAPI Example.
type Example struct {
	Ref Ref

	Summary       string
	Description   string
	Value         jsonschema.Example
	ExternalValue string

	location.Pointer `json:"-" yaml:"-"`
}
