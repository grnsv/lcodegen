<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringNullableController as BaseTestRequestRequiredStringNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringNullableResponse;

final class TestRequestRequiredStringNullableController extends BaseTestRequestRequiredStringNullableController
{
    /**
     * POST /test_request_required_string_nullable
     */
    public function testRequestRequiredStringNullable(
        Request $request,
    ): TestRequestRequiredStringNullableResponse
    {
        // TODO: Implement TestRequestRequiredStringNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
