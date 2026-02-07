<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt8Controller as BaseTestResponseStringInt8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt8Response;

final class TestResponseStringInt8Controller extends BaseTestResponseStringInt8Controller
{
    /**
     * POST /test_response_string_int8
     */
    public function testResponseStringInt8(
        Request $request,
    ): TestResponseStringInt8Response
    {
        // TODO: Implement TestResponseStringInt8
        throw new \BadMethodCallException('Not implemented');
    }
}
