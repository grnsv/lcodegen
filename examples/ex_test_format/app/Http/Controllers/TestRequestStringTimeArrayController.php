<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringTimeArrayController as BaseTestRequestStringTimeArrayController;
use App\Http\Requests\TestRequestStringTimeArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringTimeArrayResponse;

final class TestRequestStringTimeArrayController extends BaseTestRequestStringTimeArrayController
{
    /**
     * POST /test_request_string_time_array
     */
    public function testRequestStringTimeArray(
        TestRequestStringTimeArrayRequest $request,
    ): TestRequestStringTimeArrayResponse
    {
        // TODO: Implement TestRequestStringTimeArray
        throw new \BadMethodCallException('Not implemented');
    }
}
