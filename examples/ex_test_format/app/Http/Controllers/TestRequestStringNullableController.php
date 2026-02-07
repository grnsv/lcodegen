<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringNullableController as BaseTestRequestStringNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringNullableResponse;

final class TestRequestStringNullableController extends BaseTestRequestStringNullableController
{
    /**
     * POST /test_request_string_nullable
     */
    public function testRequestStringNullable(
        Request $request,
    ): TestRequestStringNullableResponse
    {
        // TODO: Implement TestRequestStringNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
