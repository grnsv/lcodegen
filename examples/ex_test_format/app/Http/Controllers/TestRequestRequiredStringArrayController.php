<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringArrayController as BaseTestRequestRequiredStringArrayController;
use App\Http\Requests\TestRequestRequiredStringArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringArrayResponse;

final class TestRequestRequiredStringArrayController extends BaseTestRequestRequiredStringArrayController
{
    /**
     * POST /test_request_required_string_array
     */
    public function testRequestRequiredStringArray(
        TestRequestRequiredStringArrayRequest $request,
    ): TestRequestRequiredStringArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringArray
        throw new \BadMethodCallException('Not implemented');
    }
}
