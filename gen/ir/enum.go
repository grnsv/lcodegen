package ir

type EnumVariant struct {
	Name  string
	Value any
}

// ValuePhp returns the PHP representation of the enum variant value.
func (v *EnumVariant) ValuePhp() string {
	return PrintPhpValue(v.Value)
}
