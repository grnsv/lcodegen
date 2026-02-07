<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNullArrayController as BaseTestRequestRequiredNullArrayController;
use App\Http\Requests\TestRequestRequiredNullArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredNullArrayResponse;

final class TestRequestRequiredNullArrayController extends BaseTestRequestRequiredNullArrayController
{
    /**
     * POST /test_request_required_null_array
     */
    public function testRequestRequiredNullArray(
        TestRequestRequiredNullArrayRequest $request,
    ): TestRequestRequiredNullArrayResponse
    {
        // TODO: Implement TestRequestRequiredNullArray
        throw new \BadMethodCallException('Not implemented');
    }
}
