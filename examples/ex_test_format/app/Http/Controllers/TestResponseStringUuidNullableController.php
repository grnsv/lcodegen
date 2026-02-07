<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUuidNullableController as BaseTestResponseStringUuidNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUuidNullableResponse;

final class TestResponseStringUuidNullableController extends BaseTestResponseStringUuidNullableController
{
    /**
     * POST /test_response_string_uuid_nullable
     */
    public function testResponseStringUuidNullable(
        Request $request,
    ): TestResponseStringUuidNullableResponse
    {
        // TODO: Implement TestResponseStringUuidNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
