<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint32ArrayController as BaseTestRequestStringUint32ArrayController;
use App\Http\Requests\TestRequestStringUint32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUint32ArrayResponse;

final class TestRequestStringUint32ArrayController extends BaseTestRequestStringUint32ArrayController
{
    /**
     * POST /test_request_string_uint32_array
     */
    public function testRequestStringUint32Array(
        TestRequestStringUint32ArrayRequest $request,
    ): TestRequestStringUint32ArrayResponse
    {
        // TODO: Implement TestRequestStringUint32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
