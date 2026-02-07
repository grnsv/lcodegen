<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixNanoController as BaseTestResponseStringUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixNanoResponse;

final class TestResponseStringUnixNanoController extends BaseTestResponseStringUnixNanoController
{
    /**
     * POST /test_response_string_unix-nano
     */
    public function testResponseStringUnixNano(
        Request $request,
    ): TestResponseStringUnixNanoResponse
    {
        // TODO: Implement TestResponseStringUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
