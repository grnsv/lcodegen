<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDateNullableController as BaseTestResponseStringDateNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDateNullableResponse;

final class TestResponseStringDateNullableController extends BaseTestResponseStringDateNullableController
{
    /**
     * POST /test_response_string_date_nullable
     */
    public function testResponseStringDateNullable(
        Request $request,
    ): TestResponseStringDateNullableResponse
    {
        // TODO: Implement TestResponseStringDateNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
