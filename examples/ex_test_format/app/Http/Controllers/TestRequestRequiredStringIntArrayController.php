<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringIntArrayController as BaseTestRequestRequiredStringIntArrayController;
use App\Http\Requests\TestRequestRequiredStringIntArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringIntArrayResponse;

final class TestRequestRequiredStringIntArrayController extends BaseTestRequestRequiredStringIntArrayController
{
    /**
     * POST /test_request_required_string_int_array
     */
    public function testRequestRequiredStringIntArray(
        TestRequestRequiredStringIntArrayRequest $request,
    ): TestRequestRequiredStringIntArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringIntArray
        throw new \BadMethodCallException('Not implemented');
    }
}
