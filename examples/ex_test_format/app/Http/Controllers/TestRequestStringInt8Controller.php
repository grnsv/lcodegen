<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt8Controller as BaseTestRequestStringInt8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringInt8Response;

final class TestRequestStringInt8Controller extends BaseTestRequestStringInt8Controller
{
    /**
     * POST /test_request_string_int8
     */
    public function testRequestStringInt8(
        Request $request,
    ): TestRequestStringInt8Response
    {
        // TODO: Implement TestRequestStringInt8
        throw new \BadMethodCallException('Not implemented');
    }
}
