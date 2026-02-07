<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixController as BaseTestResponseStringUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixResponse;

final class TestResponseStringUnixController extends BaseTestResponseStringUnixController
{
    /**
     * POST /test_response_string_unix
     */
    public function testResponseStringUnix(
        Request $request,
    ): TestResponseStringUnixResponse
    {
        // TODO: Implement TestResponseStringUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
