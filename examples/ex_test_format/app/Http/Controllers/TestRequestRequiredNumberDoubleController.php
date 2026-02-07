<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberDoubleController as BaseTestRequestRequiredNumberDoubleController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberDoubleResponse;

final class TestRequestRequiredNumberDoubleController extends BaseTestRequestRequiredNumberDoubleController
{
    /**
     * POST /test_request_required_number_double
     */
    public function testRequestRequiredNumberDouble(
        Request $request,
    ): TestRequestRequiredNumberDoubleResponse
    {
        // TODO: Implement TestRequestRequiredNumberDouble
        throw new \BadMethodCallException('Not implemented');
    }
}
