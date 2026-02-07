<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerArrayController as BaseTestRequestRequiredIntegerArrayController;
use App\Http\Requests\TestRequestRequiredIntegerArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerArrayResponse;

final class TestRequestRequiredIntegerArrayController extends BaseTestRequestRequiredIntegerArrayController
{
    /**
     * POST /test_request_required_integer_array
     */
    public function testRequestRequiredIntegerArray(
        TestRequestRequiredIntegerArrayRequest $request,
    ): TestRequestRequiredIntegerArrayResponse
    {
        // TODO: Implement TestRequestRequiredIntegerArray
        throw new \BadMethodCallException('Not implemented');
    }
}
