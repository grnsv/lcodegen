<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerInt64Controller as BaseTestRequestIntegerInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerInt64Response;

final class TestRequestIntegerInt64Controller extends BaseTestRequestIntegerInt64Controller
{
    /**
     * POST /test_request_integer_int64
     */
    public function testRequestIntegerInt64(
        Request $request,
    ): TestRequestIntegerInt64Response
    {
        // TODO: Implement TestRequestIntegerInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
