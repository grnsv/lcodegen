// Package genfs contains gen.FileSystem implementations.
package genfs

import (
	"os"
	"path/filepath"
)

// FormattedSource is gen.FileSystem implementation that writes generated sources.
type FormattedSource struct {
	Root string
}

// WriteFile implements gen.FileSystem.
func (t FormattedSource) WriteFile(name string, content []byte) error {
	return os.WriteFile(filepath.Join(t.Root, name), content, 0o644)
}
