<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIntNullableController as BaseTestRequestStringIntNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringIntNullableResponse;

final class TestRequestStringIntNullableController extends BaseTestRequestStringIntNullableController
{
    /**
     * POST /test_request_string_int_nullable
     */
    public function testRequestStringIntNullable(
        Request $request,
    ): TestRequestStringIntNullableResponse
    {
        // TODO: Implement TestRequestStringIntNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
