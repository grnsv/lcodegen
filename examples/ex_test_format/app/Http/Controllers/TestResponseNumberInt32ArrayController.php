<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberInt32ArrayController as BaseTestResponseNumberInt32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberInt32ArrayResponse;

final class TestResponseNumberInt32ArrayController extends BaseTestResponseNumberInt32ArrayController
{
    /**
     * POST /test_response_number_int32_array
     */
    public function testResponseNumberInt32Array(
        Request $request,
    ): TestResponseNumberInt32ArrayResponse
    {
        // TODO: Implement TestResponseNumberInt32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
