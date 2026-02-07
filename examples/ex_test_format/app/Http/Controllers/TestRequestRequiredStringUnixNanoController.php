<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUnixNanoController as BaseTestRequestRequiredStringUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUnixNanoResponse;

final class TestRequestRequiredStringUnixNanoController extends BaseTestRequestRequiredStringUnixNanoController
{
    /**
     * POST /test_request_required_string_unix-nano
     */
    public function testRequestRequiredStringUnixNano(
        Request $request,
    ): TestRequestRequiredStringUnixNanoResponse
    {
        // TODO: Implement TestRequestRequiredStringUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
