<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt32Controller as BaseTestRequestStringInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringInt32Response;

final class TestRequestStringInt32Controller extends BaseTestRequestStringInt32Controller
{
    /**
     * POST /test_request_string_int32
     */
    public function testRequestStringInt32(
        Request $request,
    ): TestRequestStringInt32Response
    {
        // TODO: Implement TestRequestStringInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
