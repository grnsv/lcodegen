<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUint32Controller as BaseTestRequestIntegerUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUint32Response;

final class TestRequestIntegerUint32Controller extends BaseTestRequestIntegerUint32Controller
{
    /**
     * POST /test_request_integer_uint32
     */
    public function testRequestIntegerUint32(
        Request $request,
    ): TestRequestIntegerUint32Response
    {
        // TODO: Implement TestRequestIntegerUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
