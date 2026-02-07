<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUnixSecondController as BaseTestRequestIntegerUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUnixSecondsResponse;

final class TestRequestIntegerUnixSecondController extends BaseTestRequestIntegerUnixSecondController
{
    /**
     * POST /test_request_integer_unix-seconds
     */
    public function testRequestIntegerUnixSeconds(
        Request $request,
    ): TestRequestIntegerUnixSecondsResponse
    {
        // TODO: Implement TestRequestIntegerUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
