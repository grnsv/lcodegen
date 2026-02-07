<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUnixMicroController as BaseTestRequestStringUnixMicroController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUnixMicroResponse;

final class TestRequestStringUnixMicroController extends BaseTestRequestStringUnixMicroController
{
    /**
     * POST /test_request_string_unix-micro
     */
    public function testRequestStringUnixMicro(
        Request $request,
    ): TestRequestStringUnixMicroResponse
    {
        // TODO: Implement TestRequestStringUnixMicro
        throw new \BadMethodCallException('Not implemented');
    }
}
