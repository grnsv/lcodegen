<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint16Controller as BaseTestResponseStringUint16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint16Response;

final class TestResponseStringUint16Controller extends BaseTestResponseStringUint16Controller
{
    /**
     * POST /test_response_string_uint16
     */
    public function testResponseStringUint16(
        Request $request,
    ): TestResponseStringUint16Response
    {
        // TODO: Implement TestResponseStringUint16
        throw new \BadMethodCallException('Not implemented');
    }
}
