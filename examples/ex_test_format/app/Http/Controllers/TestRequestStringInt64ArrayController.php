<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt64ArrayController as BaseTestRequestStringInt64ArrayController;
use App\Http\Requests\TestRequestStringInt64ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringInt64ArrayResponse;

final class TestRequestStringInt64ArrayController extends BaseTestRequestStringInt64ArrayController
{
    /**
     * POST /test_request_string_int64_array
     */
    public function testRequestStringInt64Array(
        TestRequestStringInt64ArrayRequest $request,
    ): TestRequestStringInt64ArrayResponse
    {
        // TODO: Implement TestRequestStringInt64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
