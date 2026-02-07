<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringTimeController as BaseTestRequestRequiredStringTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringTimeResponse;

final class TestRequestRequiredStringTimeController extends BaseTestRequestRequiredStringTimeController
{
    /**
     * POST /test_request_required_string_time
     */
    public function testRequestRequiredStringTime(
        Request $request,
    ): TestRequestRequiredStringTimeResponse
    {
        // TODO: Implement TestRequestRequiredStringTime
        throw new \BadMethodCallException('Not implemented');
    }
}
