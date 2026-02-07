<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringDateTimeController as BaseTestRequestStringDateTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringDateTimeResponse;

final class TestRequestStringDateTimeController extends BaseTestRequestStringDateTimeController
{
    /**
     * POST /test_request_string_date-time
     */
    public function testRequestStringDateTime(
        Request $request,
    ): TestRequestStringDateTimeResponse
    {
        // TODO: Implement TestRequestStringDateTime
        throw new \BadMethodCallException('Not implemented');
    }
}
