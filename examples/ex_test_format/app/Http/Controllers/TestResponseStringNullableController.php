<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringNullableController as BaseTestResponseStringNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringNullableResponse;

final class TestResponseStringNullableController extends BaseTestResponseStringNullableController
{
    /**
     * POST /test_response_string_nullable
     */
    public function testResponseStringNullable(
        Request $request,
    ): TestResponseStringNullableResponse
    {
        // TODO: Implement TestResponseStringNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
