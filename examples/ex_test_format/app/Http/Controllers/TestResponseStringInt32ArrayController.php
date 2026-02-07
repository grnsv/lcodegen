<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt32ArrayController as BaseTestResponseStringInt32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt32ArrayResponse;

final class TestResponseStringInt32ArrayController extends BaseTestResponseStringInt32ArrayController
{
    /**
     * POST /test_response_string_int32_array
     */
    public function testResponseStringInt32Array(
        Request $request,
    ): TestResponseStringInt32ArrayResponse
    {
        // TODO: Implement TestResponseStringInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
