package examples

import (
	_ "github.com/grnsv/lcodegen"
)

// Generate schemas:
//
//go:generate go run github.com/grnsv/lcodegen/tools/mkformattest --output ../_testdata/positive/format_gen.json

// Fully supported:
//
//go:generate go run ../cmd/lcodegen -v --target ./ex_test_format       ../_testdata/positive/format_gen.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_petstore          ../_testdata/examples/petstore.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_firecracker       ../_testdata/examples/firecracker.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_gotd              ../_testdata/examples/gotd_bot_api.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_ent               ../_testdata/examples/ent.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_route_params      ../_testdata/positive/ex_route_params.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_manga             ../_testdata/examples/manga.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_petstore_expanded ../_testdata/examples/petstore-expanded.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_telegram          ../_testdata/examples/telegram_bot_api.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_2ch               ../_testdata/examples/2ch.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_tinkoff           ../_testdata/examples/tinkoff.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_openai            ../_testdata/examples/openai.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_oauth2            ../_testdata/examples/petstore-oauth2.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_oauth2_scopes_and_or ../_testdata/examples/oauth2-scopes-and-or.yml
//go:generate go run ../cmd/lcodegen -v --target ./ex_swagger_petstore     ../_testdata/examples/swagger-petstore-1.0.27.yaml

// Partially supported:
//
//go:generate go run ../cmd/lcodegen -v --target ./ex_k8s    --config config/k8s.yml    ../_testdata/examples/k8s.json
//go:generate go run ../cmd/lcodegen -v --target ./ex_github --config config/github.yml ../_testdata/examples/api.github.com.json
