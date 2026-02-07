<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringFloat32Controller as BaseTestRequestRequiredStringFloat32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringFloat32Response;

final class TestRequestRequiredStringFloat32Controller extends BaseTestRequestRequiredStringFloat32Controller
{
    /**
     * POST /test_request_required_string_float32
     */
    public function testRequestRequiredStringFloat32(
        Request $request,
    ): TestRequestRequiredStringFloat32Response
    {
        // TODO: Implement TestRequestRequiredStringFloat32
        throw new \BadMethodCallException('Not implemented');
    }
}
