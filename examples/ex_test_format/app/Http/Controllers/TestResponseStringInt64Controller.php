<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt64Controller as BaseTestResponseStringInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt64Response;

final class TestResponseStringInt64Controller extends BaseTestResponseStringInt64Controller
{
    /**
     * POST /test_response_string_int64
     */
    public function testResponseStringInt64(
        Request $request,
    ): TestResponseStringInt64Response
    {
        // TODO: Implement TestResponseStringInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
