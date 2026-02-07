<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUintArrayController as BaseTestRequestStringUintArrayController;
use App\Http\Requests\TestRequestStringUintArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUintArrayResponse;

final class TestRequestStringUintArrayController extends BaseTestRequestStringUintArrayController
{
    /**
     * POST /test_request_string_uint_array
     */
    public function testRequestStringUintArray(
        TestRequestStringUintArrayRequest $request,
    ): TestRequestStringUintArrayResponse
    {
        // TODO: Implement TestRequestStringUintArray
        throw new \BadMethodCallException('Not implemented');
    }
}
