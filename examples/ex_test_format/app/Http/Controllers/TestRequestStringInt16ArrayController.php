<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringInt16ArrayController as BaseTestRequestStringInt16ArrayController;
use App\Http\Requests\TestRequestStringInt16ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringInt16ArrayResponse;

final class TestRequestStringInt16ArrayController extends BaseTestRequestStringInt16ArrayController
{
    /**
     * POST /test_request_string_int16_array
     */
    public function testRequestStringInt16Array(
        TestRequestStringInt16ArrayRequest $request,
    ): TestRequestStringInt16ArrayResponse
    {
        // TODO: Implement TestRequestStringInt16Array
        throw new \BadMethodCallException('Not implemented');
    }
}
