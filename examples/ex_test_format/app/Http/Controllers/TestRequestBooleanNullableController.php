<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestBooleanNullableController as BaseTestRequestBooleanNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestBooleanNullableResponse;

final class TestRequestBooleanNullableController extends BaseTestRequestBooleanNullableController
{
    /**
     * POST /test_request_boolean_nullable
     */
    public function testRequestBooleanNullable(
        Request $request,
    ): TestRequestBooleanNullableResponse
    {
        // TODO: Implement TestRequestBooleanNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
