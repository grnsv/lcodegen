<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringBase64NullableController as BaseTestResponseStringBase64NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringBase64NullableResponse;

final class TestResponseStringBase64NullableController extends BaseTestResponseStringBase64NullableController
{
    /**
     * POST /test_response_string_base64_nullable
     */
    public function testResponseStringBase64Nullable(
        Request $request,
    ): TestResponseStringBase64NullableResponse
    {
        // TODO: Implement TestResponseStringBase64Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
