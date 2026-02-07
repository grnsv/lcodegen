<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringFloat64Controller as BaseTestRequestRequiredStringFloat64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringFloat64Response;

final class TestRequestRequiredStringFloat64Controller extends BaseTestRequestRequiredStringFloat64Controller
{
    /**
     * POST /test_request_required_string_float64
     */
    public function testRequestRequiredStringFloat64(
        Request $request,
    ): TestRequestRequiredStringFloat64Response
    {
        // TODO: Implement TestRequestRequiredStringFloat64
        throw new \BadMethodCallException('Not implemented');
    }
}
