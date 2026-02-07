<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDurationController as BaseTestResponseStringDurationController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDurationResponse;

final class TestResponseStringDurationController extends BaseTestResponseStringDurationController
{
    /**
     * POST /test_response_string_duration
     */
    public function testResponseStringDuration(
        Request $request,
    ): TestResponseStringDurationResponse
    {
        // TODO: Implement TestResponseStringDuration
        throw new \BadMethodCallException('Not implemented');
    }
}
