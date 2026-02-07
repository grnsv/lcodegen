<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt16Controller as BaseTestRequestStringInt16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringInt16Response;

final class TestRequestStringInt16Controller extends BaseTestRequestStringInt16Controller
{
    /**
     * POST /test_request_string_int16
     */
    public function testRequestStringInt16(
        Request $request,
    ): TestRequestStringInt16Response
    {
        // TODO: Implement TestRequestStringInt16
        throw new \BadMethodCallException('Not implemented');
    }
}
