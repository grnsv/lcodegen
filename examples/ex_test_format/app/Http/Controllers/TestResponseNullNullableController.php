<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNullNullableController as BaseTestResponseNullNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNullNullableResponse;

final class TestResponseNullNullableController extends BaseTestResponseNullNullableController
{
    /**
     * POST /test_response_null_nullable
     */
    public function testResponseNullNullable(
        Request $request,
    ): TestResponseNullNullableResponse
    {
        // TODO: Implement TestResponseNullNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
