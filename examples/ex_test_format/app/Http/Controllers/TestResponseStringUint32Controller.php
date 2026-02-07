<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUint32Controller as BaseTestResponseStringUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUint32Response;

final class TestResponseStringUint32Controller extends BaseTestResponseStringUint32Controller
{
    /**
     * POST /test_response_string_uint32
     */
    public function testResponseStringUint32(
        Request $request,
    ): TestResponseStringUint32Response
    {
        // TODO: Implement TestResponseStringUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
