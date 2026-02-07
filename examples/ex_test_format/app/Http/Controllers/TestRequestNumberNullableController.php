<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberNullableController as BaseTestRequestNumberNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberNullableResponse;

final class TestRequestNumberNullableController extends BaseTestRequestNumberNullableController
{
    /**
     * POST /test_request_number_nullable
     */
    public function testRequestNumberNullable(
        Request $request,
    ): TestRequestNumberNullableResponse
    {
        // TODO: Implement TestRequestNumberNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
