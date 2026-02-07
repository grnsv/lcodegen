<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringDateArrayController as BaseTestRequestStringDateArrayController;
use App\Http\Requests\TestRequestStringDateArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringDateArrayResponse;

final class TestRequestStringDateArrayController extends BaseTestRequestStringDateArrayController
{
    /**
     * POST /test_request_string_date_array
     */
    public function testRequestStringDateArray(
        TestRequestStringDateArrayRequest $request,
    ): TestRequestStringDateArrayResponse
    {
        // TODO: Implement TestRequestStringDateArray
        throw new \BadMethodCallException('Not implemented');
    }
}
