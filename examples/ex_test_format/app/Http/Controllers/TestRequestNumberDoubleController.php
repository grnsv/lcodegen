<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberDoubleController as BaseTestRequestNumberDoubleController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberDoubleResponse;

final class TestRequestNumberDoubleController extends BaseTestRequestNumberDoubleController
{
    /**
     * POST /test_request_number_double
     */
    public function testRequestNumberDouble(
        Request $request,
    ): TestRequestNumberDoubleResponse
    {
        // TODO: Implement TestRequestNumberDouble
        throw new \BadMethodCallException('Not implemented');
    }
}
