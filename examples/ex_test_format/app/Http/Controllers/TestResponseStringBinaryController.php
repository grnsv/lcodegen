<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringBinaryController as BaseTestResponseStringBinaryController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringBinaryResponse;

final class TestResponseStringBinaryController extends BaseTestResponseStringBinaryController
{
    /**
     * POST /test_response_string_binary
     */
    public function testResponseStringBinary(
        Request $request,
    ): TestResponseStringBinaryResponse
    {
        // TODO: Implement TestResponseStringBinary
        throw new \BadMethodCallException('Not implemented');
    }
}
