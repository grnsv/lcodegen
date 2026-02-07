<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt32NullableController as BaseTestResponseStringInt32NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt32NullableResponse;

final class TestResponseStringInt32NullableController extends BaseTestResponseStringInt32NullableController
{
    /**
     * POST /test_response_string_int32_nullable
     */
    public function testResponseStringInt32Nullable(
        Request $request,
    ): TestResponseStringInt32NullableResponse
    {
        // TODO: Implement TestResponseStringInt32Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
