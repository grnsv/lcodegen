<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUriArrayController as BaseTestRequestStringUriArrayController;
use App\Http\Requests\TestRequestStringUriArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUriArrayResponse;

final class TestRequestStringUriArrayController extends BaseTestRequestStringUriArrayController
{
    /**
     * POST /test_request_string_uri_array
     */
    public function testRequestStringUriArray(
        TestRequestStringUriArrayRequest $request,
    ): TestRequestStringUriArrayResponse
    {
        // TODO: Implement TestRequestStringUriArray
        throw new \BadMethodCallException('Not implemented');
    }
}
