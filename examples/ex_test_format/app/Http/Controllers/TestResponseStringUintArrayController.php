<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUintArrayController as BaseTestResponseStringUintArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUintArrayResponse;

final class TestResponseStringUintArrayController extends BaseTestResponseStringUintArrayController
{
    /**
     * POST /test_response_string_uint_array
     */
    public function testResponseStringUintArray(
        Request $request,
    ): TestResponseStringUintArrayResponse
    {
        // TODO: Implement TestResponseStringUintArray
        throw new \BadMethodCallException('Not implemented');
    }
}
