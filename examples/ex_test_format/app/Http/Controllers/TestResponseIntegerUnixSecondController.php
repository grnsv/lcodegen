<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixSecondController as BaseTestResponseIntegerUnixSecondController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixSecondsResponse;

final class TestResponseIntegerUnixSecondController extends BaseTestResponseIntegerUnixSecondController
{
    /**
     * POST /test_response_integer_unix-seconds
     */
    public function testResponseIntegerUnixSeconds(
        Request $request,
    ): TestResponseIntegerUnixSecondsResponse
    {
        // TODO: Implement TestResponseIntegerUnixSeconds
        throw new \BadMethodCallException('Not implemented');
    }
}
