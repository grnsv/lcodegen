<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberInt32Controller as BaseTestRequestNumberInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberInt32Response;

final class TestRequestNumberInt32Controller extends BaseTestRequestNumberInt32Controller
{
    /**
     * POST /test_request_number_int32
     */
    public function testRequestNumberInt32(
        Request $request,
    ): TestRequestNumberInt32Response
    {
        // TODO: Implement TestRequestNumberInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
