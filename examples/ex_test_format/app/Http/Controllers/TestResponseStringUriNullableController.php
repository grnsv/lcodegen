<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUriNullableController as BaseTestResponseStringUriNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUriNullableResponse;

final class TestResponseStringUriNullableController extends BaseTestResponseStringUriNullableController
{
    /**
     * POST /test_response_string_uri_nullable
     */
    public function testResponseStringUriNullable(
        Request $request,
    ): TestResponseStringUriNullableResponse
    {
        // TODO: Implement TestResponseStringUriNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
