<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringFloat32ArrayController as BaseTestRequestStringFloat32ArrayController;
use App\Http\Requests\TestRequestStringFloat32ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringFloat32ArrayResponse;

final class TestRequestStringFloat32ArrayController extends BaseTestRequestStringFloat32ArrayController
{
    /**
     * POST /test_request_string_float32_array
     */
    public function testRequestStringFloat32Array(
        TestRequestStringFloat32ArrayRequest $request,
    ): TestRequestStringFloat32ArrayResponse
    {
        // TODO: Implement TestRequestStringFloat32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
