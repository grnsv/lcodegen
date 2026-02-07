<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringNullableArrayController as BaseTestRequestStringNullableArrayController;
use App\Http\Requests\TestRequestStringNullableArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringNullableArrayResponse;

final class TestRequestStringNullableArrayController extends BaseTestRequestStringNullableArrayController
{
    /**
     * POST /test_request_string_nullable_array
     */
    public function testRequestStringNullableArray(
        TestRequestStringNullableArrayRequest $request,
    ): TestRequestStringNullableArrayResponse
    {
        // TODO: Implement TestRequestStringNullableArray
        throw new \BadMethodCallException('Not implemented');
    }
}
