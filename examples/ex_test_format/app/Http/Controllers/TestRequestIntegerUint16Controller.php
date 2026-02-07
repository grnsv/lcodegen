<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUint16Controller as BaseTestRequestIntegerUint16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUint16Response;

final class TestRequestIntegerUint16Controller extends BaseTestRequestIntegerUint16Controller
{
    /**
     * POST /test_request_integer_uint16
     */
    public function testRequestIntegerUint16(
        Request $request,
    ): TestRequestIntegerUint16Response
    {
        // TODO: Implement TestRequestIntegerUint16
        throw new \BadMethodCallException('Not implemented');
    }
}
