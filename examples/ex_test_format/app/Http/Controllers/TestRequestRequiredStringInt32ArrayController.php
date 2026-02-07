<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringInt32ArrayController as BaseTestRequestRequiredStringInt32ArrayController;
use App\Http\Requests\TestRequestRequiredStringInt32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringInt32ArrayResponse;

final class TestRequestRequiredStringInt32ArrayController extends BaseTestRequestRequiredStringInt32ArrayController
{
    /**
     * POST /test_request_required_string_int32_array
     */
    public function testRequestRequiredStringInt32Array(
        TestRequestRequiredStringInt32ArrayRequest $request,
    ): TestRequestRequiredStringInt32ArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
