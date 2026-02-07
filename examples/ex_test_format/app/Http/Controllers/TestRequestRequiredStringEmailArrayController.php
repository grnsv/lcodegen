<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringEmailArrayController as BaseTestRequestRequiredStringEmailArrayController;
use App\Http\Requests\TestRequestRequiredStringEmailArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringEmailArrayResponse;

final class TestRequestRequiredStringEmailArrayController extends BaseTestRequestRequiredStringEmailArrayController
{
    /**
     * POST /test_request_required_string_email_array
     */
    public function testRequestRequiredStringEmailArray(
        TestRequestRequiredStringEmailArrayRequest $request,
    ): TestRequestRequiredStringEmailArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringEmailArray
        throw new \BadMethodCallException('Not implemented');
    }
}
