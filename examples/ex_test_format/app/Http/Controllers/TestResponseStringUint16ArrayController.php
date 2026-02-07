<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint16ArrayController as BaseTestResponseStringUint16ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint16ArrayResponse;

final class TestResponseStringUint16ArrayController extends BaseTestResponseStringUint16ArrayController
{
    /**
     * POST /test_response_string_uint16_array
     */
    public function testResponseStringUint16Array(
        Request $request,
    ): TestResponseStringUint16ArrayResponse
    {
        // TODO: Implement TestResponseStringUint16Array
        throw new \BadMethodCallException('Not implemented');
    }
}
