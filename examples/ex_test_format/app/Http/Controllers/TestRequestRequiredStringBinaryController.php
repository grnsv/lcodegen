<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringBinaryController as BaseTestRequestRequiredStringBinaryController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringBinaryResponse;

final class TestRequestRequiredStringBinaryController extends BaseTestRequestRequiredStringBinaryController
{
    /**
     * POST /test_request_required_string_binary
     */
    public function testRequestRequiredStringBinary(
        Request $request,
    ): TestRequestRequiredStringBinaryResponse
    {
        // TODO: Implement TestRequestRequiredStringBinary
        throw new \BadMethodCallException('Not implemented');
    }
}
