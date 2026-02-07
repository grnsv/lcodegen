<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUnixController as BaseTestRequestStringUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUnixResponse;

final class TestRequestStringUnixController extends BaseTestRequestStringUnixController
{
    /**
     * POST /test_request_string_unix
     */
    public function testRequestStringUnix(
        Request $request,
    ): TestRequestStringUnixResponse
    {
        // TODO: Implement TestRequestStringUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
