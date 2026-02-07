# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

`lcodegen` is a CLI tool that generates Laravel code from OpenAPI v3 specifications. It generates routes, controllers, request validation classes, response classes, and DTOs for Laravel applications.

## Project Context

This project is a fork/rewrite of the `ogen` OpenAPI Go generator. The core architecture for parsing OpenAPI specs and building an intermediate representation (IR) remains intact, but the code generation templates and output logic have been adapted for Laravel/PHP.

## Build and Development Commands

```bash
# Build the binary
go build -o lcodegen ./cmd/lcodegen

# Run the generator (run from a Laravel project directory)
go run ./cmd/lcodegen [options] <openapi-spec.yml>

# Example
go run ./cmd/lcodegen _testdata/examples/petstore-expanded.yml

# Run tests (with race detector)
make test

# Run tests without race detector (faster)
make test_fast

# Run specific test
go test ./gen -run TestGeneratorName

# Run coverage report
make coverage

# Regenerate examples after template changes
make generate examples

# Lint code
make lint

# Clean generated files
make clean

# Commit generated files separately
make commit_gen
```

## CLI Options

- `--config` - Path to config file
- `--target` - Path to target dir (default `.`)
- `--package` - Target package name (default `api`)
- `--clean` - Clean generated files before generation
- `--strict` - Disable cross-type constraint interpretation
- `--version` - Print version and exit
- `-v` - Enable verbose logging
- `--loglevel` - Zap logging level
- `--color` - Enable color logging
- `--cpuprofile` - Write CPU profile to file
- `--memprofile` - Write memory profile to file
- `--memprofilerate` - Sets runtime.MemProfileRate

## High-Level Architecture

### Parsing Pipeline
1. **OpenAPI Parsing** (`ogen.Parse()` in `ogen.go`)
   - Parses OpenAPI v3 spec (JSON/YAML)
   - Validates spec structure
   - Resolves $ref references

2. **Intermediate Representation (IR)** (`gen/ir/` directory)
   - `ir.Operation` - Represents API endpoints with parameters, request bodies, responses
   - `ir.Type` - Represents data schemas (objects, arrays, primitives)
   - `ir.Server` - Represents server configurations
   - `ir.Security` - Represents authentication schemes
   - The IR is language-agnostic and serves as the foundation for code generation

3. **Generator** (`gen/generator.go`)
   - `NewGenerator()` - Creates generator from parsed spec
   - Builds IR from OpenAPI spec
   - Route tree and controller grouping (`gen/route_node.go`, `gen/router.go`, `gen/route_tree.go`)
   - Schema transformation (`gen/schema_gen.go`, `gen/schema_transform.go`)
   - Laravel-specific helpers (`gen/laravel_helpers.go`)

4. **Template Rendering** (`gen/templates.go`, `gen/_template/`)
   - Laravel PHP templates: `common.tmpl`, `controller.tmpl`, `user_controller.tmpl`, `request.tmpl`, `user_request.tmpl`, `routes.tmpl`, `response.tmpl`, `error_response.tmpl`, `dto.tmpl`, `optional.tmpl`
   - Inherited ogen templates (Go-oriented, kept for compatibility): `json.tmpl`, `schemas.tmpl`, `validators.tmpl`, `handlers.tmpl`, `router.tmpl`, `servers.tmpl`, etc.
   - Template helpers in `gen/ir/template_helpers.go`

5. **Code Writing** (`gen/write.go`, `gen/genfs/`)
   - `WriteSource()` - Writes generated files to disk
   - Uses `LaravelPaths` struct for output directory configuration

### Output Structure

Generated Laravel structure:
- `routes/openapi.php` - API routes
- `app/Http/Controllers/` - User-editable controllers (created once, not overwritten)
- `app/Http/Controllers/OpenApi/` - Generated base controllers (always regenerated)
- `app/Http/Requests/` - User-editable Form Request classes (created once, not overwritten)
- `app/Http/Requests/OpenApi/` - Generated base request classes (always regenerated)
- `app/Http/Responses/OpenApi/` - Generated response classes
- `app/Http/Dto/OpenApi/` - Generated DTO classes and optional wrappers (e.g., `OptString.php`)

### Template Pattern

The generator uses a two-class pattern for controllers and requests:
1. **Base class** (in `OpenApi/` subdirectory) - Always regenerated, contains generated code
2. **User class** (in parent directory) - Created once if not exists, extends base class, user-editable

Example: `AddPetRequest.php` extends `OpenApi/AddPetRequest.php`

## Configuration

The generator supports a YAML config file (`ogen.yml`, `ogen.yaml`, `.ogen.yml`, `.ogen.yaml`):

```yaml
generator:
  ignore_not_implemented: ["all"]  # Skip unsupported features
parser:
  infer_types: true
  allow_remote: true
```

## OpenAPI Extensions

The generator recognizes custom OpenAPI extensions (x-* fields):
- `x-ogen-name` - Custom type/field names
- `x-ogen-properties` - Custom field configurations
- `x-ogen-operation-group` - Group operations (useful for organizing controllers)
- `x-ogen-server-name` - Server naming

## Testing

- `gen_test.go` - Main generator tests
- `internal/integration/` - Integration tests with full spec examples
- `_testdata/` - Test OpenAPI specifications (positive and negative cases)

## Key Files

- `cmd/lcodegen/main.go` - CLI entry point, directory creation, file writing orchestration
- `gen/generator.go` - Generator core, IR construction from parsed spec
- `gen/write.go` - Template execution and file generation logic
- `gen/laravel_helpers.go` - Laravel-specific helpers (response selection, success codes, etc.)
- `gen/route_node.go`, `gen/router.go`, `gen/route_tree.go` - Route tree construction and controller grouping
- `gen/genfs/genfs.go` - File system abstraction for writing generated files
- `gen/_template/*.tmpl` - Go text templates for PHP code generation

## Development Workflow

When modifying templates:
1. Edit `.tmpl` files in `gen/_template/`
2. Test generation in a temporary directory to avoid polluting the project:
   ```bash
   go build -o /tmp/lcodegen-bin ./cmd/lcodegen
   mkdir -p /tmp/lcodegen-test && cd /tmp/lcodegen-test
   /tmp/lcodegen-bin /path/to/_testdata/examples/petstore-expanded.yml
   ```
3. Run `make test` to validate
4. Run `make generate examples` to regenerate all examples if needed

## Contributing

This project follows [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/). Generated code should be committed separately with message `chore: commit generated files`.
