<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringPasswordArrayController as BaseTestRequestRequiredStringPasswordArrayController;
use App\Http\Requests\TestRequestRequiredStringPasswordArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringPasswordArrayResponse;

final class TestRequestRequiredStringPasswordArrayController extends BaseTestRequestRequiredStringPasswordArrayController
{
    /**
     * POST /test_request_required_string_password_array
     */
    public function testRequestRequiredStringPasswordArray(
        TestRequestRequiredStringPasswordArrayRequest $request,
    ): TestRequestRequiredStringPasswordArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringPasswordArray
        throw new \BadMethodCallException('Not implemented');
    }
}
