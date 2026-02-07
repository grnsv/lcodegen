<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt32NullableController as BaseTestRequestStringInt32NullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringInt32NullableResponse;

final class TestRequestStringInt32NullableController extends BaseTestRequestStringInt32NullableController
{
    /**
     * POST /test_request_string_int32_nullable
     */
    public function testRequestStringInt32Nullable(
        Request $request,
    ): TestRequestStringInt32NullableResponse
    {
        // TODO: Implement TestRequestStringInt32Nullable
        throw new \BadMethodCallException('Not implemented');
    }
}
