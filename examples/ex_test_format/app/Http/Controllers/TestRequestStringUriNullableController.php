<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUriNullableController as BaseTestRequestStringUriNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUriNullableResponse;

final class TestRequestStringUriNullableController extends BaseTestRequestStringUriNullableController
{
    /**
     * POST /test_request_string_uri_nullable
     */
    public function testRequestStringUriNullable(
        Request $request,
    ): TestRequestStringUriNullableResponse
    {
        // TODO: Implement TestRequestStringUriNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
