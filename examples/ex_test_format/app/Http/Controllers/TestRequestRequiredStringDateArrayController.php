<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringDateArrayController as BaseTestRequestRequiredStringDateArrayController;
use App\Http\Requests\TestRequestRequiredStringDateArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringDateArrayResponse;

final class TestRequestRequiredStringDateArrayController extends BaseTestRequestRequiredStringDateArrayController
{
    /**
     * POST /test_request_required_string_date_array
     */
    public function testRequestRequiredStringDateArray(
        TestRequestRequiredStringDateArrayRequest $request,
    ): TestRequestRequiredStringDateArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringDateArray
        throw new \BadMethodCallException('Not implemented');
    }
}
