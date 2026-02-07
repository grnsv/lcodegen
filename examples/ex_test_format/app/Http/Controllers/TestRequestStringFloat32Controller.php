<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringFloat32Controller as BaseTestRequestStringFloat32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringFloat32Response;

final class TestRequestStringFloat32Controller extends BaseTestRequestStringFloat32Controller
{
    /**
     * POST /test_request_string_float32
     */
    public function testRequestStringFloat32(
        Request $request,
    ): TestRequestStringFloat32Response
    {
        // TODO: Implement TestRequestStringFloat32
        throw new \BadMethodCallException('Not implemented');
    }
}
