<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestQueryParameterController as BaseTestQueryParameterController;
use App\Http\Requests\TestQueryParameterRequest;
use App\Http\Responses\OpenApi\TestQueryParameterResponse;

final class TestQueryParameterController extends BaseTestQueryParameterController
{
    /**
     * POST /test_query_parameter
     */
    public function testQueryParameter(
        TestQueryParameterRequest $request,
    ): TestQueryParameterResponse
    {
        // TODO: Implement TestQueryParameter
        throw new \BadMethodCallException('Not implemented');
    }
}
