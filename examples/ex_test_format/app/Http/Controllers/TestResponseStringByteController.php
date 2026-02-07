<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringByteController as BaseTestResponseStringByteController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringByteResponse;

final class TestResponseStringByteController extends BaseTestResponseStringByteController
{
    /**
     * POST /test_response_string_byte
     */
    public function testResponseStringByte(
        Request $request,
    ): TestResponseStringByteResponse
    {
        // TODO: Implement TestResponseStringByte
        throw new \BadMethodCallException('Not implemented');
    }
}
