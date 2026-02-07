<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint32Controller as BaseTestRequestStringUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUint32Response;

final class TestRequestStringUint32Controller extends BaseTestRequestStringUint32Controller
{
    /**
     * POST /test_request_string_uint32
     */
    public function testRequestStringUint32(
        Request $request,
    ): TestRequestStringUint32Response
    {
        // TODO: Implement TestRequestStringUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
