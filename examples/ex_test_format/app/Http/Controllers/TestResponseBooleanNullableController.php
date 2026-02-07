<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseBooleanNullableController as BaseTestResponseBooleanNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseBooleanNullableResponse;

final class TestResponseBooleanNullableController extends BaseTestResponseBooleanNullableController
{
    /**
     * POST /test_response_boolean_nullable
     */
    public function testResponseBooleanNullable(
        Request $request,
    ): TestResponseBooleanNullableResponse
    {
        // TODO: Implement TestResponseBooleanNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
