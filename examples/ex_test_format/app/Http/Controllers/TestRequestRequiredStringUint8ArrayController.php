<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUint8ArrayController as BaseTestRequestRequiredStringUint8ArrayController;
use App\Http\Requests\TestRequestRequiredStringUint8ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUint8ArrayResponse;

final class TestRequestRequiredStringUint8ArrayController extends BaseTestRequestRequiredStringUint8ArrayController
{
    /**
     * POST /test_request_required_string_uint8_array
     */
    public function testRequestRequiredStringUint8Array(
        TestRequestRequiredStringUint8ArrayRequest $request,
    ): TestRequestRequiredStringUint8ArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringUint8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
