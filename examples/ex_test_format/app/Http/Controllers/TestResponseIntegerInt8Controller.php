<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt8Controller as BaseTestResponseIntegerInt8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt8Response;

final class TestResponseIntegerInt8Controller extends BaseTestResponseIntegerInt8Controller
{
    /**
     * POST /test_response_integer_int8
     */
    public function testResponseIntegerInt8(
        Request $request,
    ): TestResponseIntegerInt8Response
    {
        // TODO: Implement TestResponseIntegerInt8
        throw new \BadMethodCallException('Not implemented');
    }
}
