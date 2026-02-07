package gen

// defaultImports returns a map of default imports for the generated code.
// The keys are the import paths, and the values are the aliases (empty string means no alias).
func defaultImports() map[string]string {
	return map[string]string{
		"bytes":           "",
		"context":         "",
		"encoding/base64": "",
		"fmt":             "",
		"io":              "",
		"math":            "",
		"math/big":        "",
		"math/bits":       "",
		"mime":            "",
		"mime/multipart":  "",
		"net":             "",
		"net/http":        "",
		"net/netip":       "",
		"net/url":         "",
		"regexp":          "",
		"sort":            "",
		"strconv":         "",
		"strings":         "",
		"sync":            "",
		"time":            "",

		"github.com/go-faster/errors":              "",
		"github.com/go-faster/jx":                  "",
		"github.com/google/uuid":                   "",
		"github.com/shopspring/decimal":            "",
		"go.opentelemetry.io/otel":                 "",
		"go.opentelemetry.io/otel/attribute":       "",
		"go.opentelemetry.io/otel/codes":           "",
		"go.opentelemetry.io/otel/metric":          "",
		"go.opentelemetry.io/otel/semconv/v1.37.0": "semconv",
		"go.opentelemetry.io/otel/trace":           "",
		"go.uber.org/multierr":                     "",

		"github.com/grnsv/lcodegen/conv":       "",
		"github.com/grnsv/lcodegen/http":       "ht",
		"github.com/grnsv/lcodegen/middleware": "",
		"github.com/grnsv/lcodegen/json":       "",
		"github.com/grnsv/lcodegen/ogenregex":  "",
		"github.com/grnsv/lcodegen/ogenerrors": "",
		"github.com/grnsv/lcodegen/otelogen":   "",
		"github.com/grnsv/lcodegen/uri":        "",
		"github.com/grnsv/lcodegen/validate":   "",
	}
}
