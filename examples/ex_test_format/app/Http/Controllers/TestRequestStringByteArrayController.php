<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringByteArrayController as BaseTestRequestStringByteArrayController;
use App\Http\Requests\TestRequestStringByteArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringByteArrayResponse;

final class TestRequestStringByteArrayController extends BaseTestRequestStringByteArrayController
{
    /**
     * POST /test_request_string_byte_array
     */
    public function testRequestStringByteArray(
        TestRequestStringByteArrayRequest $request,
    ): TestRequestStringByteArrayResponse
    {
        // TODO: Implement TestRequestStringByteArray
        throw new \BadMethodCallException('Not implemented');
    }
}
