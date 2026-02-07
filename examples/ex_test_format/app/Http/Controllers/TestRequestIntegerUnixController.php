<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUnixController as BaseTestRequestIntegerUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUnixResponse;

final class TestRequestIntegerUnixController extends BaseTestRequestIntegerUnixController
{
    /**
     * POST /test_request_integer_unix
     */
    public function testRequestIntegerUnix(
        Request $request,
    ): TestRequestIntegerUnixResponse
    {
        // TODO: Implement TestRequestIntegerUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
