<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerNullableController as BaseTestResponseIntegerNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerNullableResponse;

final class TestResponseIntegerNullableController extends BaseTestResponseIntegerNullableController
{
    /**
     * POST /test_response_integer_nullable
     */
    public function testResponseIntegerNullable(
        Request $request,
    ): TestResponseIntegerNullableResponse
    {
        // TODO: Implement TestResponseIntegerNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
