<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringTimeArrayController as BaseTestResponseStringTimeArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringTimeArrayResponse;

final class TestResponseStringTimeArrayController extends BaseTestResponseStringTimeArrayController
{
    /**
     * POST /test_response_string_time_array
     */
    public function testResponseStringTimeArray(
        Request $request,
    ): TestResponseStringTimeArrayResponse
    {
        // TODO: Implement TestResponseStringTimeArray
        throw new \BadMethodCallException('Not implemented');
    }
}
