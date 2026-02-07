<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringArrayController as BaseTestRequestStringArrayController;
use App\Http\Requests\TestRequestStringArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringArrayResponse;

final class TestRequestStringArrayController extends BaseTestRequestStringArrayController
{
    /**
     * POST /test_request_string_array
     */
    public function testRequestStringArray(
        TestRequestStringArrayRequest $request,
    ): TestRequestStringArrayResponse
    {
        // TODO: Implement TestRequestStringArray
        throw new \BadMethodCallException('Not implemented');
    }
}
