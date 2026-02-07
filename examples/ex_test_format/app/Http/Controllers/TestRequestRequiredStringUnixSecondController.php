<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUnixSecondController as BaseTestRequestRequiredStringUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUnixSecondsResponse;

final class TestRequestRequiredStringUnixSecondController extends BaseTestRequestRequiredStringUnixSecondController
{
    /**
     * POST /test_request_required_string_unix-seconds
     */
    public function testRequestRequiredStringUnixSeconds(
        Request $request,
    ): TestRequestRequiredStringUnixSecondsResponse
    {
        // TODO: Implement TestRequestRequiredStringUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
