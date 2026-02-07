<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringIntController as BaseTestRequestRequiredStringIntController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringIntResponse;

final class TestRequestRequiredStringIntController extends BaseTestRequestRequiredStringIntController
{
    /**
     * POST /test_request_required_string_int
     */
    public function testRequestRequiredStringInt(
        Request $request,
    ): TestRequestRequiredStringIntResponse
    {
        // TODO: Implement TestRequestRequiredStringInt
        throw new \BadMethodCallException('Not implemented');
    }
}
