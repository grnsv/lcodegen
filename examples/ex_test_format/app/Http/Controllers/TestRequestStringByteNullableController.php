<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringByteNullableController as BaseTestRequestStringByteNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringByteNullableResponse;

final class TestRequestStringByteNullableController extends BaseTestRequestStringByteNullableController
{
    /**
     * POST /test_request_string_byte_nullable
     */
    public function testRequestStringByteNullable(
        Request $request,
    ): TestRequestStringByteNullableResponse
    {
        // TODO: Implement TestRequestStringByteNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
