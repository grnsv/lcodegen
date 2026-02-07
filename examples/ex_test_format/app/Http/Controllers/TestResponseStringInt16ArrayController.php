<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt16ArrayController as BaseTestResponseStringInt16ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt16ArrayResponse;

final class TestResponseStringInt16ArrayController extends BaseTestResponseStringInt16ArrayController
{
    /**
     * POST /test_response_string_int16_array
     */
    public function testResponseStringInt16Array(
        Request $request,
    ): TestResponseStringInt16ArrayResponse
    {
        // TODO: Implement TestResponseStringInt16Array
        throw new \BadMethodCallException('Not implemented');
    }
}
