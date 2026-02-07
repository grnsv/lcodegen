<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUint32ArrayController as BaseTestRequestRequiredStringUint32ArrayController;
use App\Http\Requests\TestRequestRequiredStringUint32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUint32ArrayResponse;

final class TestRequestRequiredStringUint32ArrayController extends BaseTestRequestRequiredStringUint32ArrayController
{
    /**
     * POST /test_request_required_string_uint32_array
     */
    public function testRequestRequiredStringUint32Array(
        TestRequestRequiredStringUint32ArrayRequest $request,
    ): TestRequestRequiredStringUint32ArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringUint32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
