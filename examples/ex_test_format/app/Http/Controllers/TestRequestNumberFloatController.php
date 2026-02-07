<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberFloatController as BaseTestRequestNumberFloatController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberFloatResponse;

final class TestRequestNumberFloatController extends BaseTestRequestNumberFloatController
{
    /**
     * POST /test_request_number_float
     */
    public function testRequestNumberFloat(
        Request $request,
    ): TestRequestNumberFloatResponse
    {
        // TODO: Implement TestRequestNumberFloat
        throw new \BadMethodCallException('Not implemented');
    }
}
