<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringTimeNullableController as BaseTestResponseStringTimeNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringTimeNullableResponse;

final class TestResponseStringTimeNullableController extends BaseTestResponseStringTimeNullableController
{
    /**
     * POST /test_response_string_time_nullable
     */
    public function testResponseStringTimeNullable(
        Request $request,
    ): TestResponseStringTimeNullableResponse
    {
        // TODO: Implement TestResponseStringTimeNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
