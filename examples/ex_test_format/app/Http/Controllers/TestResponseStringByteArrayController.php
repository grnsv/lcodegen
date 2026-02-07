<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringByteArrayController as BaseTestResponseStringByteArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringByteArrayResponse;

final class TestResponseStringByteArrayController extends BaseTestResponseStringByteArrayController
{
    /**
     * POST /test_response_string_byte_array
     */
    public function testResponseStringByteArray(
        Request $request,
    ): TestResponseStringByteArrayResponse
    {
        // TODO: Implement TestResponseStringByteArray
        throw new \BadMethodCallException('Not implemented');
    }
}
