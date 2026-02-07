<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestBooleanArrayController as BaseTestRequestBooleanArrayController;
use App\Http\Requests\TestRequestBooleanArrayRequest;
use App\Http\Responses\OpenApi\TestRequestBooleanArrayResponse;

final class TestRequestBooleanArrayController extends BaseTestRequestBooleanArrayController
{
    /**
     * POST /test_request_boolean_array
     */
    public function testRequestBooleanArray(
        TestRequestBooleanArrayRequest $request,
    ): TestRequestBooleanArrayResponse
    {
        // TODO: Implement TestRequestBooleanArray
        throw new \BadMethodCallException('Not implemented');
    }
}
