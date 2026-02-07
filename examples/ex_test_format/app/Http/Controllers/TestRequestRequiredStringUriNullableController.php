<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUriNullableController as BaseTestRequestRequiredStringUriNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUriNullableResponse;

final class TestRequestRequiredStringUriNullableController extends BaseTestRequestRequiredStringUriNullableController
{
    /**
     * POST /test_request_required_string_uri_nullable
     */
    public function testRequestRequiredStringUriNullable(
        Request $request,
    ): TestRequestRequiredStringUriNullableResponse
    {
        // TODO: Implement TestRequestRequiredStringUriNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
