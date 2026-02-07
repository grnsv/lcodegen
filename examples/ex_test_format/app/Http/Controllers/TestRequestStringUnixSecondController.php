<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUnixSecondController as BaseTestRequestStringUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUnixSecondsResponse;

final class TestRequestStringUnixSecondController extends BaseTestRequestStringUnixSecondController
{
    /**
     * POST /test_request_string_unix-seconds
     */
    public function testRequestStringUnixSeconds(
        Request $request,
    ): TestRequestStringUnixSecondsResponse
    {
        // TODO: Implement TestRequestStringUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
