<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUuidArrayController as BaseTestRequestRequiredStringUuidArrayController;
use App\Http\Requests\TestRequestRequiredStringUuidArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUuidArrayResponse;

final class TestRequestRequiredStringUuidArrayController extends BaseTestRequestRequiredStringUuidArrayController
{
    /**
     * POST /test_request_required_string_uuid_array
     */
    public function testRequestRequiredStringUuidArray(
        TestRequestRequiredStringUuidArrayRequest $request,
    ): TestRequestRequiredStringUuidArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringUuidArray
        throw new \BadMethodCallException('Not implemented');
    }
}
