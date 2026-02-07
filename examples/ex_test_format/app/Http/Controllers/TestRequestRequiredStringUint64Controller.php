<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUint64Controller as BaseTestRequestRequiredStringUint64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUint64Response;

final class TestRequestRequiredStringUint64Controller extends BaseTestRequestRequiredStringUint64Controller
{
    /**
     * POST /test_request_required_string_uint64
     */
    public function testRequestRequiredStringUint64(
        Request $request,
    ): TestRequestRequiredStringUint64Response
    {
        // TODO: Implement TestRequestRequiredStringUint64
        throw new \BadMethodCallException('Not implemented');
    }
}
