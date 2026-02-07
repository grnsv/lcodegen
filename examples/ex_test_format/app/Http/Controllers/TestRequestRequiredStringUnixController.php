<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUnixController as BaseTestRequestRequiredStringUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUnixResponse;

final class TestRequestRequiredStringUnixController extends BaseTestRequestRequiredStringUnixController
{
    /**
     * POST /test_request_required_string_unix
     */
    public function testRequestRequiredStringUnix(
        Request $request,
    ): TestRequestRequiredStringUnixResponse
    {
        // TODO: Implement TestRequestRequiredStringUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
