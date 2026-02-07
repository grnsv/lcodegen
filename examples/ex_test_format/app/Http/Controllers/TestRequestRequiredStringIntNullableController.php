<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringIntNullableController as BaseTestRequestRequiredStringIntNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringIntNullableResponse;

final class TestRequestRequiredStringIntNullableController extends BaseTestRequestRequiredStringIntNullableController
{
    /**
     * POST /test_request_required_string_int_nullable
     */
    public function testRequestRequiredStringIntNullable(
        Request $request,
    ): TestRequestRequiredStringIntNullableResponse
    {
        // TODO: Implement TestRequestRequiredStringIntNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
