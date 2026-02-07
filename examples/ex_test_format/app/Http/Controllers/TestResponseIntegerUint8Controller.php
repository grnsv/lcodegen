<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint8Controller as BaseTestResponseIntegerUint8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint8Response;

final class TestResponseIntegerUint8Controller extends BaseTestResponseIntegerUint8Controller
{
    /**
     * POST /test_response_integer_uint8
     */
    public function testResponseIntegerUint8(
        Request $request,
    ): TestResponseIntegerUint8Response
    {
        // TODO: Implement TestResponseIntegerUint8
        throw new \BadMethodCallException('Not implemented');
    }
}
