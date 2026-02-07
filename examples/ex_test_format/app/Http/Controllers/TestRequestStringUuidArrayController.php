<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUuidArrayController as BaseTestRequestStringUuidArrayController;
use App\Http\Requests\TestRequestStringUuidArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringUuidArrayResponse;

final class TestRequestStringUuidArrayController extends BaseTestRequestStringUuidArrayController
{
    /**
     * POST /test_request_string_uuid_array
     */
    public function testRequestStringUuidArray(
        TestRequestStringUuidArrayRequest $request,
    ): TestRequestStringUuidArrayResponse
    {
        // TODO: Implement TestRequestStringUuidArray
        throw new \BadMethodCallException('Not implemented');
    }
}
