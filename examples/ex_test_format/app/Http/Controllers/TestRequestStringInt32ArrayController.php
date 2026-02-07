<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt32ArrayController as BaseTestRequestStringInt32ArrayController;
use App\Http\Requests\TestRequestStringInt32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringInt32ArrayResponse;

final class TestRequestStringInt32ArrayController extends BaseTestRequestStringInt32ArrayController
{
    /**
     * POST /test_request_string_int32_array
     */
    public function testRequestStringInt32Array(
        TestRequestStringInt32ArrayRequest $request,
    ): TestRequestStringInt32ArrayResponse
    {
        // TODO: Implement TestRequestStringInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
