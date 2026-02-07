<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringDurationController as BaseTestRequestRequiredStringDurationController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringDurationResponse;

final class TestRequestRequiredStringDurationController extends BaseTestRequestRequiredStringDurationController
{
    /**
     * POST /test_request_required_string_duration
     */
    public function testRequestRequiredStringDuration(
        Request $request,
    ): TestRequestRequiredStringDurationResponse
    {
        // TODO: Implement TestRequestRequiredStringDuration
        throw new \BadMethodCallException('Not implemented');
    }
}
