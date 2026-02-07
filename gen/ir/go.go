package ir

import (
	"fmt"
	"strings"
)

// PrintGoValue prints given value as Go value.
func PrintGoValue(v any) string {
	switch v := v.(type) {
	case nil:
		return ""
	case string:
		return fmt.Sprintf("%q", v)
	default:
		return fmt.Sprintf("%#v", v)
	}
}

// PrintPhpValue prints given value as PHP literal.
func PrintPhpValue(v any) string {
	switch v := v.(type) {
	case nil:
		return "null"
	case string:
		escaped := strings.ReplaceAll(v, `\`, `\\`)
		escaped = strings.ReplaceAll(escaped, `'`, `\'`)
		return fmt.Sprintf("'%s'", escaped)
	case bool:
		if v {
			return "true"
		}
		return "false"
	case int64:
		return fmt.Sprintf("%d", v)
	case float64:
		return fmt.Sprintf("%v", v)
	default:
		return fmt.Sprintf("%v", v)
	}
}
