<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint8Controller as BaseTestRequestStringUint8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUint8Response;

final class TestRequestStringUint8Controller extends BaseTestRequestStringUint8Controller
{
    /**
     * POST /test_request_string_uint8
     */
    public function testRequestStringUint8(
        Request $request,
    ): TestRequestStringUint8Response
    {
        // TODO: Implement TestRequestStringUint8
        throw new \BadMethodCallException('Not implemented');
    }
}
