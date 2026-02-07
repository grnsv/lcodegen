<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixMilliController as BaseTestResponseStringUnixMilliController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixMilliResponse;

final class TestResponseStringUnixMilliController extends BaseTestResponseStringUnixMilliController
{
    /**
     * POST /test_response_string_unix-milli
     */
    public function testResponseStringUnixMilli(
        Request $request,
    ): TestResponseStringUnixMilliResponse
    {
        // TODO: Implement TestResponseStringUnixMilli
        throw new \BadMethodCallException('Not implemented');
    }
}
