<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberFloatController as BaseTestRequestRequiredNumberFloatController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberFloatResponse;

final class TestRequestRequiredNumberFloatController extends BaseTestRequestRequiredNumberFloatController
{
    /**
     * POST /test_request_required_number_float
     */
    public function testRequestRequiredNumberFloat(
        Request $request,
    ): TestRequestRequiredNumberFloatResponse
    {
        // TODO: Implement TestRequestRequiredNumberFloat
        throw new \BadMethodCallException('Not implemented');
    }
}
