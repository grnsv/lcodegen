<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUint32Controller as BaseTestRequestRequiredStringUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUint32Response;

final class TestRequestRequiredStringUint32Controller extends BaseTestRequestRequiredStringUint32Controller
{
    /**
     * POST /test_request_required_string_uint32
     */
    public function testRequestRequiredStringUint32(
        Request $request,
    ): TestRequestRequiredStringUint32Response
    {
        // TODO: Implement TestRequestRequiredStringUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
