<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint16Controller as BaseTestResponseIntegerUint16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint16Response;

final class TestResponseIntegerUint16Controller extends BaseTestResponseIntegerUint16Controller
{
    /**
     * POST /test_response_integer_uint16
     */
    public function testResponseIntegerUint16(
        Request $request,
    ): TestResponseIntegerUint16Response
    {
        // TODO: Implement TestResponseIntegerUint16
        throw new \BadMethodCallException('Not implemented');
    }
}
