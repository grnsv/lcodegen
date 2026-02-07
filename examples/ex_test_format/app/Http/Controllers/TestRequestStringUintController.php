<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUintController as BaseTestRequestStringUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUintResponse;

final class TestRequestStringUintController extends BaseTestRequestStringUintController
{
    /**
     * POST /test_request_string_uint
     */
    public function testRequestStringUint(
        Request $request,
    ): TestRequestStringUintResponse
    {
        // TODO: Implement TestRequestStringUint
        throw new \BadMethodCallException('Not implemented');
    }
}
