<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberInt32ArrayController as BaseTestRequestNumberInt32ArrayController;
use App\Http\Requests\TestRequestNumberInt32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestNumberInt32ArrayResponse;

final class TestRequestNumberInt32ArrayController extends BaseTestRequestNumberInt32ArrayController
{
    /**
     * POST /test_request_number_int32_array
     */
    public function testRequestNumberInt32Array(
        TestRequestNumberInt32ArrayRequest $request,
    ): TestRequestNumberInt32ArrayResponse
    {
        // TODO: Implement TestRequestNumberInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
