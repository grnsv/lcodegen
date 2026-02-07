<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUintController as BaseTestRequestRequiredStringUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUintResponse;

final class TestRequestRequiredStringUintController extends BaseTestRequestRequiredStringUintController
{
    /**
     * POST /test_request_required_string_uint
     */
    public function testRequestRequiredStringUint(
        Request $request,
    ): TestRequestRequiredStringUintResponse
    {
        // TODO: Implement TestRequestRequiredStringUint
        throw new \BadMethodCallException('Not implemented');
    }
}
