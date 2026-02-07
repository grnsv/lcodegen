<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt64Controller as BaseTestRequestStringInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringInt64Response;

final class TestRequestStringInt64Controller extends BaseTestRequestStringInt64Controller
{
    /**
     * POST /test_request_string_int64
     */
    public function testRequestStringInt64(
        Request $request,
    ): TestRequestStringInt64Response
    {
        // TODO: Implement TestRequestStringInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
