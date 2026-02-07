<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUnixNanoController as BaseTestRequestIntegerUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUnixNanoResponse;

final class TestRequestIntegerUnixNanoController extends BaseTestRequestIntegerUnixNanoController
{
    /**
     * POST /test_request_integer_unix-nano
     */
    public function testRequestIntegerUnixNano(
        Request $request,
    ): TestRequestIntegerUnixNanoResponse
    {
        // TODO: Implement TestRequestIntegerUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
