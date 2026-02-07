<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredFormatTestController as BaseTestRequestRequiredFormatTestController;
use App\Http\Requests\TestRequestRequiredFormatTestRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredFormatTestResponse;

final class TestRequestRequiredFormatTestController extends BaseTestRequestRequiredFormatTestController
{
    /**
     * POST /test_request_required_FormatTest
     */
    public function testRequestRequiredFormatTest(
        TestRequestRequiredFormatTestRequest $request,
    ): TestRequestRequiredFormatTestResponse
    {
        // TODO: Implement TestRequestRequiredFormatTest
        throw new \BadMethodCallException('Not implemented');
    }
}
