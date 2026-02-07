<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt16Controller as BaseTestResponseIntegerInt16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt16Response;

final class TestResponseIntegerInt16Controller extends BaseTestResponseIntegerInt16Controller
{
    /**
     * POST /test_response_integer_int16
     */
    public function testResponseIntegerInt16(
        Request $request,
    ): TestResponseIntegerInt16Response
    {
        // TODO: Implement TestResponseIntegerInt16
        throw new \BadMethodCallException('Not implemented');
    }
}
