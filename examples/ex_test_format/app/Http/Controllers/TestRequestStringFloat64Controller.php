<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringFloat64Controller as BaseTestRequestStringFloat64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringFloat64Response;

final class TestRequestStringFloat64Controller extends BaseTestRequestStringFloat64Controller
{
    /**
     * POST /test_request_string_float64
     */
    public function testRequestStringFloat64(
        Request $request,
    ): TestRequestStringFloat64Response
    {
        // TODO: Implement TestRequestStringFloat64
        throw new \BadMethodCallException('Not implemented');
    }
}
