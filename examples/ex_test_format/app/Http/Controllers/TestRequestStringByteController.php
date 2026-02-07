<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringByteController as BaseTestRequestStringByteController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringByteResponse;

final class TestRequestStringByteController extends BaseTestRequestStringByteController
{
    /**
     * POST /test_request_string_byte
     */
    public function testRequestStringByte(
        Request $request,
    ): TestRequestStringByteResponse
    {
        // TODO: Implement TestRequestStringByte
        throw new \BadMethodCallException('Not implemented');
    }
}
