<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringBinaryController as BaseTestRequestStringBinaryController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringBinaryResponse;

final class TestRequestStringBinaryController extends BaseTestRequestStringBinaryController
{
    /**
     * POST /test_request_string_binary
     */
    public function testRequestStringBinary(
        Request $request,
    ): TestRequestStringBinaryResponse
    {
        // TODO: Implement TestRequestStringBinary
        throw new \BadMethodCallException('Not implemented');
    }
}
