<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerNullableController as BaseTestRequestRequiredIntegerNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerNullableResponse;

final class TestRequestRequiredIntegerNullableController extends BaseTestRequestRequiredIntegerNullableController
{
    /**
     * POST /test_request_required_integer_nullable
     */
    public function testRequestRequiredIntegerNullable(
        Request $request,
    ): TestRequestRequiredIntegerNullableResponse
    {
        // TODO: Implement TestRequestRequiredIntegerNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
