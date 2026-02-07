<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUriArrayController as BaseTestRequestRequiredStringUriArrayController;
use App\Http\Requests\TestRequestRequiredStringUriArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUriArrayResponse;

final class TestRequestRequiredStringUriArrayController extends BaseTestRequestRequiredStringUriArrayController
{
    /**
     * POST /test_request_required_string_uri_array
     */
    public function testRequestRequiredStringUriArray(
        TestRequestRequiredStringUriArrayRequest $request,
    ): TestRequestRequiredStringUriArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringUriArray
        throw new \BadMethodCallException('Not implemented');
    }
}
