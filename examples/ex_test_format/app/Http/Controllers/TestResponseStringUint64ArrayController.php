<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint64ArrayController as BaseTestResponseStringUint64ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint64ArrayResponse;

final class TestResponseStringUint64ArrayController extends BaseTestResponseStringUint64ArrayController
{
    /**
     * POST /test_response_string_uint64_array
     */
    public function testResponseStringUint64Array(
        Request $request,
    ): TestResponseStringUint64ArrayResponse
    {
        // TODO: Implement TestResponseStringUint64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
