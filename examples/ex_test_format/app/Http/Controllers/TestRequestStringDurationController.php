<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringDurationController as BaseTestRequestStringDurationController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringDurationResponse;

final class TestRequestStringDurationController extends BaseTestRequestStringDurationController
{
    /**
     * POST /test_request_string_duration
     */
    public function testRequestStringDuration(
        Request $request,
    ): TestRequestStringDurationResponse
    {
        // TODO: Implement TestRequestStringDuration
        throw new \BadMethodCallException('Not implemented');
    }
}
