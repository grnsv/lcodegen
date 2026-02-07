<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNullArrayController as BaseTestRequestNullArrayController;
use App\Http\Requests\TestRequestNullArrayRequest;
use App\Http\Responses\OpenApi\TestRequestNullArrayResponse;

final class TestRequestNullArrayController extends BaseTestRequestNullArrayController
{
    /**
     * POST /test_request_null_array
     */
    public function testRequestNullArray(
        TestRequestNullArrayRequest $request,
    ): TestRequestNullArrayResponse
    {
        // TODO: Implement TestRequestNullArray
        throw new \BadMethodCallException('Not implemented');
    }
}
