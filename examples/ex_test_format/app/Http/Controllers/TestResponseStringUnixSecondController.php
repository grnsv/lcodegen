<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixSecondController as BaseTestResponseStringUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixSecondsResponse;

final class TestResponseStringUnixSecondController extends BaseTestResponseStringUnixSecondController
{
    /**
     * POST /test_response_string_unix-seconds
     */
    public function testResponseStringUnixSeconds(
        Request $request,
    ): TestResponseStringUnixSecondsResponse
    {
        // TODO: Implement TestResponseStringUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
