<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerUnixController as BaseTestRequestRequiredIntegerUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerUnixResponse;

final class TestRequestRequiredIntegerUnixController extends BaseTestRequestRequiredIntegerUnixController
{
    /**
     * POST /test_request_required_integer_unix
     */
    public function testRequestRequiredIntegerUnix(
        Request $request,
    ): TestRequestRequiredIntegerUnixResponse
    {
        // TODO: Implement TestRequestRequiredIntegerUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
