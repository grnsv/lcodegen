<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint32ArrayController as BaseTestResponseStringUint32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint32ArrayResponse;

final class TestResponseStringUint32ArrayController extends BaseTestResponseStringUint32ArrayController
{
    /**
     * POST /test_response_string_uint32_array
     */
    public function testResponseStringUint32Array(
        Request $request,
    ): TestResponseStringUint32ArrayResponse
    {
        // TODO: Implement TestResponseStringUint32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
