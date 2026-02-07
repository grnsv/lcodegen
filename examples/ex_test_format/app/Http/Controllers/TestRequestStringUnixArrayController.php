<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUnixArrayController as BaseTestRequestStringUnixArrayController;
use App\Http\Requests\TestRequestStringUnixArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUnixArrayResponse;

final class TestRequestStringUnixArrayController extends BaseTestRequestStringUnixArrayController
{
    /**
     * POST /test_request_string_unix_array
     */
    public function testRequestStringUnixArray(
        TestRequestStringUnixArrayRequest $request,
    ): TestRequestStringUnixArrayResponse
    {
        // TODO: Implement TestRequestStringUnixArray
        throw new \BadMethodCallException('Not implemented');
    }
}
