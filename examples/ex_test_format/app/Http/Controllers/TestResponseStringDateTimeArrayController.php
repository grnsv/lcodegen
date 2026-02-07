<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDateTimeArrayController as BaseTestResponseStringDateTimeArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDateTimeArrayResponse;

final class TestResponseStringDateTimeArrayController extends BaseTestResponseStringDateTimeArrayController
{
    /**
     * POST /test_response_string_date-time_array
     */
    public function testResponseStringDateTimeArray(
        Request $request,
    ): TestResponseStringDateTimeArrayResponse
    {
        // TODO: Implement TestResponseStringDateTimeArray
        throw new \BadMethodCallException('Not implemented');
    }
}
