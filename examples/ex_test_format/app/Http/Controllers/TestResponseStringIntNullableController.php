<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIntNullableController as BaseTestResponseStringIntNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIntNullableResponse;

final class TestResponseStringIntNullableController extends BaseTestResponseStringIntNullableController
{
    /**
     * POST /test_response_string_int_nullable
     */
    public function testResponseStringIntNullable(
        Request $request,
    ): TestResponseStringIntNullableResponse
    {
        // TODO: Implement TestResponseStringIntNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
