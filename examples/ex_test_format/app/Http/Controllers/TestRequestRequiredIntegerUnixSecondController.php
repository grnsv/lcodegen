<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerUnixSecondController as BaseTestRequestRequiredIntegerUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerUnixSecondsResponse;

final class TestRequestRequiredIntegerUnixSecondController extends BaseTestRequestRequiredIntegerUnixSecondController
{
    /**
     * POST /test_request_required_integer_unix-seconds
     */
    public function testRequestRequiredIntegerUnixSeconds(
        Request $request,
    ): TestRequestRequiredIntegerUnixSecondsResponse
    {
        // TODO: Implement TestRequestRequiredIntegerUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
