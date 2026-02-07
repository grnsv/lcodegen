<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt16Controller as BaseTestResponseStringInt16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt16Response;

final class TestResponseStringInt16Controller extends BaseTestResponseStringInt16Controller
{
    /**
     * POST /test_response_string_int16
     */
    public function testResponseStringInt16(
        Request $request,
    ): TestResponseStringInt16Response
    {
        // TODO: Implement TestResponseStringInt16
        throw new \BadMethodCallException('Not implemented');
    }
}
