<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUint64ArrayController as BaseTestRequestStringUint64ArrayController;
use App\Http\Requests\TestRequestStringUint64ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUint64ArrayResponse;

final class TestRequestStringUint64ArrayController extends BaseTestRequestStringUint64ArrayController
{
    /**
     * POST /test_request_string_uint64_array
     */
    public function testRequestStringUint64Array(
        TestRequestStringUint64ArrayRequest $request,
    ): TestRequestStringUint64ArrayResponse
    {
        // TODO: Implement TestRequestStringUint64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
