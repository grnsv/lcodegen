<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringBase64NullableController as BaseTestRequestStringBase64NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringBase64NullableResponse;

final class TestRequestStringBase64NullableController extends BaseTestRequestStringBase64NullableController
{
    /**
     * POST /test_request_string_base64_nullable
     */
    public function testRequestStringBase64Nullable(
        Request $request,
    ): TestRequestStringBase64NullableResponse
    {
        // TODO: Implement TestRequestStringBase64Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
