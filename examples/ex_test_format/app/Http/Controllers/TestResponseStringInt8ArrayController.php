<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt8ArrayController as BaseTestResponseStringInt8ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt8ArrayResponse;

final class TestResponseStringInt8ArrayController extends BaseTestResponseStringInt8ArrayController
{
    /**
     * POST /test_response_string_int8_array
     */
    public function testResponseStringInt8Array(
        Request $request,
    ): TestResponseStringInt8ArrayResponse
    {
        // TODO: Implement TestResponseStringInt8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
