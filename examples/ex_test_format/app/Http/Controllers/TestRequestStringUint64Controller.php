<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint64Controller as BaseTestRequestStringUint64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUint64Response;

final class TestRequestStringUint64Controller extends BaseTestRequestStringUint64Controller
{
    /**
     * POST /test_request_string_uint64
     */
    public function testRequestStringUint64(
        Request $request,
    ): TestRequestStringUint64Response
    {
        // TODO: Implement TestRequestStringUint64
        throw new \BadMethodCallException('Not implemented');
    }
}
