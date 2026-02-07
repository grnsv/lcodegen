<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringFloat32ArrayController as BaseTestResponseStringFloat32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringFloat32ArrayResponse;

final class TestResponseStringFloat32ArrayController extends BaseTestResponseStringFloat32ArrayController
{
    /**
     * POST /test_response_string_float32_array
     */
    public function testResponseStringFloat32Array(
        Request $request,
    ): TestResponseStringFloat32ArrayResponse
    {
        // TODO: Implement TestResponseStringFloat32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
