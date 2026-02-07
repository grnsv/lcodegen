<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringByteNullableController as BaseTestResponseStringByteNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringByteNullableResponse;

final class TestResponseStringByteNullableController extends BaseTestResponseStringByteNullableController
{
    /**
     * POST /test_response_string_byte_nullable
     */
    public function testResponseStringByteNullable(
        Request $request,
    ): TestResponseStringByteNullableResponse
    {
        // TODO: Implement TestResponseStringByteNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
