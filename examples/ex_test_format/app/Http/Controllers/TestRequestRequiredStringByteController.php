<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringByteController as BaseTestRequestRequiredStringByteController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringByteResponse;

final class TestRequestRequiredStringByteController extends BaseTestRequestRequiredStringByteController
{
    /**
     * POST /test_request_required_string_byte
     */
    public function testRequestRequiredStringByte(
        Request $request,
    ): TestRequestRequiredStringByteResponse
    {
        // TODO: Implement TestRequestRequiredStringByte
        throw new \BadMethodCallException('Not implemented');
    }
}
