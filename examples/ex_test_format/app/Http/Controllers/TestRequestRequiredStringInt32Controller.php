<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringInt32Controller as BaseTestRequestRequiredStringInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringInt32Response;

final class TestRequestRequiredStringInt32Controller extends BaseTestRequestRequiredStringInt32Controller
{
    /**
     * POST /test_request_required_string_int32
     */
    public function testRequestRequiredStringInt32(
        Request $request,
    ): TestRequestRequiredStringInt32Response
    {
        // TODO: Implement TestRequestRequiredStringInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
