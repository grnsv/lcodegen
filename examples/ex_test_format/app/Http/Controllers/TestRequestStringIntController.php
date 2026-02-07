<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIntController as BaseTestRequestStringIntController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringIntResponse;

final class TestRequestStringIntController extends BaseTestRequestStringIntController
{
    /**
     * POST /test_request_string_int
     */
    public function testRequestStringInt(
        Request $request,
    ): TestRequestStringIntResponse
    {
        // TODO: Implement TestRequestStringInt
        throw new \BadMethodCallException('Not implemented');
    }
}
