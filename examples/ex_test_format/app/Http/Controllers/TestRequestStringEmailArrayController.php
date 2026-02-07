<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringEmailArrayController as BaseTestRequestStringEmailArrayController;
use App\Http\Requests\TestRequestStringEmailArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringEmailArrayResponse;

final class TestRequestStringEmailArrayController extends BaseTestRequestStringEmailArrayController
{
    /**
     * POST /test_request_string_email_array
     */
    public function testRequestStringEmailArray(
        TestRequestStringEmailArrayRequest $request,
    ): TestRequestStringEmailArrayResponse
    {
        // TODO: Implement TestRequestStringEmailArray
        throw new \BadMethodCallException('Not implemented');
    }
}
