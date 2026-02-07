<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerNullableController as BaseTestRequestIntegerNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerNullableResponse;

final class TestRequestIntegerNullableController extends BaseTestRequestIntegerNullableController
{
    /**
     * POST /test_request_integer_nullable
     */
    public function testRequestIntegerNullable(
        Request $request,
    ): TestRequestIntegerNullableResponse
    {
        // TODO: Implement TestRequestIntegerNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
