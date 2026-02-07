<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint64Controller as BaseTestResponseStringUint64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint64Response;

final class TestResponseStringUint64Controller extends BaseTestResponseStringUint64Controller
{
    /**
     * POST /test_response_string_uint64
     */
    public function testResponseStringUint64(
        Request $request,
    ): TestResponseStringUint64Response
    {
        // TODO: Implement TestResponseStringUint64
        throw new \BadMethodCallException('Not implemented');
    }
}
