<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringFloat64Controller as BaseTestResponseStringFloat64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringFloat64Response;

final class TestResponseStringFloat64Controller extends BaseTestResponseStringFloat64Controller
{
    /**
     * POST /test_response_string_float64
     */
    public function testResponseStringFloat64(
        Request $request,
    ): TestResponseStringFloat64Response
    {
        // TODO: Implement TestResponseStringFloat64
        throw new \BadMethodCallException('Not implemented');
    }
}
