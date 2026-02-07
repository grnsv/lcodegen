<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint16Controller as BaseTestRequestStringUint16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUint16Response;

final class TestRequestStringUint16Controller extends BaseTestRequestStringUint16Controller
{
    /**
     * POST /test_request_string_uint16
     */
    public function testRequestStringUint16(
        Request $request,
    ): TestRequestStringUint16Response
    {
        // TODO: Implement TestRequestStringUint16
        throw new \BadMethodCallException('Not implemented');
    }
}
