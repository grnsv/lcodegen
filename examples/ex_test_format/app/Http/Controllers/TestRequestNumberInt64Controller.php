<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberInt64Controller as BaseTestRequestNumberInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberInt64Response;

final class TestRequestNumberInt64Controller extends BaseTestRequestNumberInt64Controller
{
    /**
     * POST /test_request_number_int64
     */
    public function testRequestNumberInt64(
        Request $request,
    ): TestRequestNumberInt64Response
    {
        // TODO: Implement TestRequestNumberInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
