<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredBooleanArrayController as BaseTestRequestRequiredBooleanArrayController;
use App\Http\Requests\TestRequestRequiredBooleanArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredBooleanArrayResponse;

final class TestRequestRequiredBooleanArrayController extends BaseTestRequestRequiredBooleanArrayController
{
    /**
     * POST /test_request_required_boolean_array
     */
    public function testRequestRequiredBooleanArray(
        TestRequestRequiredBooleanArrayRequest $request,
    ): TestRequestRequiredBooleanArrayResponse
    {
        // TODO: Implement TestRequestRequiredBooleanArray
        throw new \BadMethodCallException('Not implemented');
    }
}
