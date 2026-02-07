<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUnixNanoController as BaseTestRequestStringUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUnixNanoResponse;

final class TestRequestStringUnixNanoController extends BaseTestRequestStringUnixNanoController
{
    /**
     * POST /test_request_string_unix-nano
     */
    public function testRequestStringUnixNano(
        Request $request,
    ): TestRequestStringUnixNanoResponse
    {
        // TODO: Implement TestRequestStringUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
