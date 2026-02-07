<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint8ArrayController as BaseTestResponseStringUint8ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint8ArrayResponse;

final class TestResponseStringUint8ArrayController extends BaseTestResponseStringUint8ArrayController
{
    /**
     * POST /test_response_string_uint8_array
     */
    public function testResponseStringUint8Array(
        Request $request,
    ): TestResponseStringUint8ArrayResponse
    {
        // TODO: Implement TestResponseStringUint8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
