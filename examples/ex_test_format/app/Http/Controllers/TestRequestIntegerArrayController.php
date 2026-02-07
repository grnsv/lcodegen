<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerArrayController as BaseTestRequestIntegerArrayController;
use App\Http\Requests\TestRequestIntegerArrayRequest;
use App\Http\Responses\OpenApi\TestRequestIntegerArrayResponse;

final class TestRequestIntegerArrayController extends BaseTestRequestIntegerArrayController
{
    /**
     * POST /test_request_integer_array
     */
    public function testRequestIntegerArray(
        TestRequestIntegerArrayRequest $request,
    ): TestRequestIntegerArrayResponse
    {
        // TODO: Implement TestRequestIntegerArray
        throw new \BadMethodCallException('Not implemented');
    }
}
