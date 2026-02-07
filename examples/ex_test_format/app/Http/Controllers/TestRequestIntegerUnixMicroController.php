<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUnixMicroController as BaseTestRequestIntegerUnixMicroController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUnixMicroResponse;

final class TestRequestIntegerUnixMicroController extends BaseTestRequestIntegerUnixMicroController
{
    /**
     * POST /test_request_integer_unix-micro
     */
    public function testRequestIntegerUnixMicro(
        Request $request,
    ): TestRequestIntegerUnixMicroResponse
    {
        // TODO: Implement TestRequestIntegerUnixMicro
        throw new \BadMethodCallException('Not implemented');
    }
}
