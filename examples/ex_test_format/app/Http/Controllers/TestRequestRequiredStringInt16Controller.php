<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringInt16Controller as BaseTestRequestRequiredStringInt16Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringInt16Response;

final class TestRequestRequiredStringInt16Controller extends BaseTestRequestRequiredStringInt16Controller
{
    /**
     * POST /test_request_required_string_int16
     */
    public function testRequestRequiredStringInt16(
        Request $request,
    ): TestRequestRequiredStringInt16Response
    {
        // TODO: Implement TestRequestRequiredStringInt16
        throw new \BadMethodCallException('Not implemented');
    }
}
