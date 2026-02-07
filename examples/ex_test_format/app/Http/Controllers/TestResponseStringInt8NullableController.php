<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt8NullableController as BaseTestResponseStringInt8NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt8NullableResponse;

final class TestResponseStringInt8NullableController extends BaseTestResponseStringInt8NullableController
{
    /**
     * POST /test_response_string_int8_nullable
     */
    public function testResponseStringInt8Nullable(
        Request $request,
    ): TestResponseStringInt8NullableResponse
    {
        // TODO: Implement TestResponseStringInt8Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
