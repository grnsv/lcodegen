<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringBinaryArrayController as BaseTestResponseStringBinaryArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringBinaryArrayResponse;

final class TestResponseStringBinaryArrayController extends BaseTestResponseStringBinaryArrayController
{
    /**
     * POST /test_response_string_binary_array
     */
    public function testResponseStringBinaryArray(
        Request $request,
    ): TestResponseStringBinaryArrayResponse
    {
        // TODO: Implement TestResponseStringBinaryArray
        throw new \BadMethodCallException('Not implemented');
    }
}
