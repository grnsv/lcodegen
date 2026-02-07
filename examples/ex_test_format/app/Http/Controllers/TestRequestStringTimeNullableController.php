<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringTimeNullableController as BaseTestRequestStringTimeNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringTimeNullableResponse;

final class TestRequestStringTimeNullableController extends BaseTestRequestStringTimeNullableController
{
    /**
     * POST /test_request_string_time_nullable
     */
    public function testRequestStringTimeNullable(
        Request $request,
    ): TestRequestStringTimeNullableResponse
    {
        // TODO: Implement TestRequestStringTimeNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
