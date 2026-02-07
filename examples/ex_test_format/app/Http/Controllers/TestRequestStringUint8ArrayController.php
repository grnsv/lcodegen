<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint8ArrayController as BaseTestRequestStringUint8ArrayController;
use App\Http\Requests\TestRequestStringUint8ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUint8ArrayResponse;

final class TestRequestStringUint8ArrayController extends BaseTestRequestStringUint8ArrayController
{
    /**
     * POST /test_request_string_uint8_array
     */
    public function testRequestStringUint8Array(
        TestRequestStringUint8ArrayRequest $request,
    ): TestRequestStringUint8ArrayResponse
    {
        // TODO: Implement TestRequestStringUint8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
