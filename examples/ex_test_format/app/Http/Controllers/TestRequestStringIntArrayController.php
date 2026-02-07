<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIntArrayController as BaseTestRequestStringIntArrayController;
use App\Http\Requests\TestRequestStringIntArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringIntArrayResponse;

final class TestRequestStringIntArrayController extends BaseTestRequestStringIntArrayController
{
    /**
     * POST /test_request_string_int_array
     */
    public function testRequestStringIntArray(
        TestRequestStringIntArrayRequest $request,
    ): TestRequestStringIntArrayResponse
    {
        // TODO: Implement TestRequestStringIntArray
        throw new \BadMethodCallException('Not implemented');
    }
}
