<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt8ArrayController as BaseTestResponseIntegerInt8ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt8ArrayResponse;

final class TestResponseIntegerInt8ArrayController extends BaseTestResponseIntegerInt8ArrayController
{
    /**
     * POST /test_response_integer_int8_array
     */
    public function testResponseIntegerInt8Array(
        Request $request,
    ): TestResponseIntegerInt8ArrayResponse
    {
        // TODO: Implement TestResponseIntegerInt8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
