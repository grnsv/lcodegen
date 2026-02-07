<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberNullableController as BaseTestResponseNumberNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberNullableResponse;

final class TestResponseNumberNullableController extends BaseTestResponseNumberNullableController
{
    /**
     * POST /test_response_number_nullable
     */
    public function testResponseNumberNullable(
        Request $request,
    ): TestResponseNumberNullableResponse
    {
        // TODO: Implement TestResponseNumberNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
