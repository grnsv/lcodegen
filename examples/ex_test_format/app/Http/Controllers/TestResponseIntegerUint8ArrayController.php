<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint8ArrayController as BaseTestResponseIntegerUint8ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint8ArrayResponse;

final class TestResponseIntegerUint8ArrayController extends BaseTestResponseIntegerUint8ArrayController
{
    /**
     * POST /test_response_integer_uint8_array
     */
    public function testResponseIntegerUint8Array(
        Request $request,
    ): TestResponseIntegerUint8ArrayResponse
    {
        // TODO: Implement TestResponseIntegerUint8Array
        throw new \BadMethodCallException('Not implemented');
    }
}
