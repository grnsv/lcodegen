<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt32ArrayController as BaseTestResponseIntegerInt32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt32ArrayResponse;

final class TestResponseIntegerInt32ArrayController extends BaseTestResponseIntegerInt32ArrayController
{
    /**
     * POST /test_response_integer_int32_array
     */
    public function testResponseIntegerInt32Array(
        Request $request,
    ): TestResponseIntegerInt32ArrayResponse
    {
        // TODO: Implement TestResponseIntegerInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
