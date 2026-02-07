<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt64ArrayController as BaseTestResponseStringInt64ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt64ArrayResponse;

final class TestResponseStringInt64ArrayController extends BaseTestResponseStringInt64ArrayController
{
    /**
     * POST /test_response_string_int64_array
     */
    public function testResponseStringInt64Array(
        Request $request,
    ): TestResponseStringInt64ArrayResponse
    {
        // TODO: Implement TestResponseStringInt64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
