<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringFloat32Controller as BaseTestResponseStringFloat32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringFloat32Response;

final class TestResponseStringFloat32Controller extends BaseTestResponseStringFloat32Controller
{
    /**
     * POST /test_response_string_float32
     */
    public function testResponseStringFloat32(
        Request $request,
    ): TestResponseStringFloat32Response
    {
        // TODO: Implement TestResponseStringFloat32
        throw new \BadMethodCallException('Not implemented');
    }
}
