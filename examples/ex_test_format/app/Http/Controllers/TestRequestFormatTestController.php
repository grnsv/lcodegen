<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestFormatTestController as BaseTestRequestFormatTestController;
use App\Http\Requests\TestRequestFormatTestRequest;
use App\Http\Responses\OpenApi\TestRequestFormatTestResponse;

final class TestRequestFormatTestController extends BaseTestRequestFormatTestController
{
    /**
     * POST /test_request_FormatTest
     */
    public function testRequestFormatTest(
        TestRequestFormatTestRequest $request,
    ): TestRequestFormatTestResponse
    {
        // TODO: Implement TestRequestFormatTest
        throw new \BadMethodCallException('Not implemented');
    }
}
