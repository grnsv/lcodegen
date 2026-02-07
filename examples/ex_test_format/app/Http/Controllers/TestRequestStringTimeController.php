<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringTimeController as BaseTestRequestStringTimeController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringTimeResponse;

final class TestRequestStringTimeController extends BaseTestRequestStringTimeController
{
    /**
     * POST /test_request_string_time
     */
    public function testRequestStringTime(
        Request $request,
    ): TestRequestStringTimeResponse
    {
        // TODO: Implement TestRequestStringTime
        throw new \BadMethodCallException('Not implemented');
    }
}
