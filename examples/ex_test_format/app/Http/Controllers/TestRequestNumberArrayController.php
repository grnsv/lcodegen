<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberArrayController as BaseTestRequestNumberArrayController;
use App\Http\Requests\TestRequestNumberArrayRequest;
use App\Http\Responses\OpenApi\TestRequestNumberArrayResponse;

final class TestRequestNumberArrayController extends BaseTestRequestNumberArrayController
{
    /**
     * POST /test_request_number_array
     */
    public function testRequestNumberArray(
        TestRequestNumberArrayRequest $request,
    ): TestRequestNumberArrayResponse
    {
        // TODO: Implement TestRequestNumberArray
        throw new \BadMethodCallException('Not implemented');
    }
}
