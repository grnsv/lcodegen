<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringFloat64ArrayController as BaseTestResponseStringFloat64ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringFloat64ArrayResponse;

final class TestResponseStringFloat64ArrayController extends BaseTestResponseStringFloat64ArrayController
{
    /**
     * POST /test_response_string_float64_array
     */
    public function testResponseStringFloat64Array(
        Request $request,
    ): TestResponseStringFloat64ArrayResponse
    {
        // TODO: Implement TestResponseStringFloat64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
