<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringTimeController as BaseTestResponseStringTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringTimeResponse;

final class TestResponseStringTimeController extends BaseTestResponseStringTimeController
{
    /**
     * POST /test_response_string_time
     */
    public function testResponseStringTime(
        Request $request,
    ): TestResponseStringTimeResponse
    {
        // TODO: Implement TestResponseStringTime
        throw new \BadMethodCallException('Not implemented');
    }
}
