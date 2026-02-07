<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberArrayController as BaseTestRequestRequiredNumberArrayController;
use App\Http\Requests\TestRequestRequiredNumberArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberArrayResponse;

final class TestRequestRequiredNumberArrayController extends BaseTestRequestRequiredNumberArrayController
{
    /**
     * POST /test_request_required_number_array
     */
    public function testRequestRequiredNumberArray(
        TestRequestRequiredNumberArrayRequest $request,
    ): TestRequestRequiredNumberArrayResponse
    {
        // TODO: Implement TestRequestRequiredNumberArray
        throw new \BadMethodCallException('Not implemented');
    }
}
