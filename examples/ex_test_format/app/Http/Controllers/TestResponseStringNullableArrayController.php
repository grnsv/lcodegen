<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringNullableArrayController as BaseTestResponseStringNullableArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringNullableArrayResponse;

final class TestResponseStringNullableArrayController extends BaseTestResponseStringNullableArrayController
{
    /**
     * POST /test_response_string_nullable_array
     */
    public function testResponseStringNullableArray(
        Request $request,
    ): TestResponseStringNullableArrayResponse
    {
        // TODO: Implement TestResponseStringNullableArray
        throw new \BadMethodCallException('Not implemented');
    }
}
