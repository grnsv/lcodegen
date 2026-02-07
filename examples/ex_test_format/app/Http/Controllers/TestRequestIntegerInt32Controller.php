<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerInt32Controller as BaseTestRequestIntegerInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerInt32Response;

final class TestRequestIntegerInt32Controller extends BaseTestRequestIntegerInt32Controller
{
    /**
     * POST /test_request_integer_int32
     */
    public function testRequestIntegerInt32(
        Request $request,
    ): TestRequestIntegerInt32Response
    {
        // TODO: Implement TestRequestIntegerInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
