<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringInt64Controller as BaseTestRequestRequiredStringInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringInt64Response;

final class TestRequestRequiredStringInt64Controller extends BaseTestRequestRequiredStringInt64Controller
{
    /**
     * POST /test_request_required_string_int64
     */
    public function testRequestRequiredStringInt64(
        Request $request,
    ): TestRequestRequiredStringInt64Response
    {
        // TODO: Implement TestRequestRequiredStringInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
