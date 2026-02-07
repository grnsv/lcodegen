<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt8ArrayController as BaseTestRequestStringInt8ArrayController;
use App\Http\Requests\TestRequestStringInt8ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringInt8ArrayResponse;

final class TestRequestStringInt8ArrayController extends BaseTestRequestStringInt8ArrayController
{
    /**
     * POST /test_request_string_int8_array
     */
    public function testRequestStringInt8Array(
        TestRequestStringInt8ArrayRequest $request,
    ): TestRequestStringInt8ArrayResponse
    {
        // TODO: Implement TestRequestStringInt8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
