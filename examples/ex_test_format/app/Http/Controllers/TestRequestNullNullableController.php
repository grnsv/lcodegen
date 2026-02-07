<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNullNullableController as BaseTestRequestNullNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNullNullableResponse;

final class TestRequestNullNullableController extends BaseTestRequestNullNullableController
{
    /**
     * POST /test_request_null_nullable
     */
    public function testRequestNullNullable(
        Request $request,
    ): TestRequestNullNullableResponse
    {
        // TODO: Implement TestRequestNullNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
