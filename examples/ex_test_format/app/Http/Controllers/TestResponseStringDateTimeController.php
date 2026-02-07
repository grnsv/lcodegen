<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDateTimeController as BaseTestResponseStringDateTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDateTimeResponse;

final class TestResponseStringDateTimeController extends BaseTestResponseStringDateTimeController
{
    /**
     * POST /test_response_string_date-time
     */
    public function testResponseStringDateTime(
        Request $request,
    ): TestResponseStringDateTimeResponse
    {
        // TODO: Implement TestResponseStringDateTime
        throw new \BadMethodCallException('Not implemented');
    }
}
