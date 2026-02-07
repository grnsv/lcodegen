<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint8Controller as BaseTestResponseStringUint8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint8Response;

final class TestResponseStringUint8Controller extends BaseTestResponseStringUint8Controller
{
    /**
     * POST /test_response_string_uint8
     */
    public function testResponseStringUint8(
        Request $request,
    ): TestResponseStringUint8Response
    {
        // TODO: Implement TestResponseStringUint8
        throw new \BadMethodCallException('Not implemented');
    }
}
