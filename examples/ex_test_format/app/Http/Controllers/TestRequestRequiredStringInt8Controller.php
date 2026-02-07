<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringInt8Controller as BaseTestRequestRequiredStringInt8Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringInt8Response;

final class TestRequestRequiredStringInt8Controller extends BaseTestRequestRequiredStringInt8Controller
{
    /**
     * POST /test_request_required_string_int8
     */
    public function testRequestRequiredStringInt8(
        Request $request,
    ): TestRequestRequiredStringInt8Response
    {
        // TODO: Implement TestRequestRequiredStringInt8
        throw new \BadMethodCallException('Not implemented');
    }
}
