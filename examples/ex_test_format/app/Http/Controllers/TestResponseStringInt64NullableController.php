<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt64NullableController as BaseTestResponseStringInt64NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt64NullableResponse;

final class TestResponseStringInt64NullableController extends BaseTestResponseStringInt64NullableController
{
    /**
     * POST /test_response_string_int64_nullable
     */
    public function testResponseStringInt64Nullable(
        Request $request,
    ): TestResponseStringInt64NullableResponse
    {
        // TODO: Implement TestResponseStringInt64Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
