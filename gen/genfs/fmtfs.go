package genfs

// CheckFS is in-memory gen.FileSystem implementation for checking generated sources.
type CheckFS struct{}

// WriteFile implements gen.FileSystem.
func (n CheckFS) WriteFile(baseName string, source []byte) error {
	return nil
}
