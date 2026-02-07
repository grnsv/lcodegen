<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberNullableController as BaseTestRequestRequiredNumberNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberNullableResponse;

final class TestRequestRequiredNumberNullableController extends BaseTestRequestRequiredNumberNullableController
{
    /**
     * POST /test_request_required_number_nullable
     */
    public function testRequestRequiredNumberNullable(
        Request $request,
    ): TestRequestRequiredNumberNullableResponse
    {
        // TODO: Implement TestRequestRequiredNumberNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
