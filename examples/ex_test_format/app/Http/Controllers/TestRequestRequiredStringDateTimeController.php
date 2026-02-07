<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringDateTimeController as BaseTestRequestRequiredStringDateTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringDateTimeResponse;

final class TestRequestRequiredStringDateTimeController extends BaseTestRequestRequiredStringDateTimeController
{
    /**
     * POST /test_request_required_string_date-time
     */
    public function testRequestRequiredStringDateTime(
        Request $request,
    ): TestRequestRequiredStringDateTimeResponse
    {
        // TODO: Implement TestRequestRequiredStringDateTime
        throw new \BadMethodCallException('Not implemented');
    }
}
