<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringInt32Controller as BaseTestResponseStringInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringInt32Response;

final class TestResponseStringInt32Controller extends BaseTestResponseStringInt32Controller
{
    /**
     * POST /test_response_string_int32
     */
    public function testResponseStringInt32(
        Request $request,
    ): TestResponseStringInt32Response
    {
        // TODO: Implement TestResponseStringInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
