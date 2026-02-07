<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerController as BaseTestRequestIntegerController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerResponse;

final class TestRequestIntegerController extends BaseTestRequestIntegerController
{
    /**
     * POST /test_request_integer
     */
    public function testRequestInteger(
        Request $request,
    ): TestRequestIntegerResponse
    {
        // TODO: Implement TestRequestInteger
        throw new \BadMethodCallException('Not implemented');
    }
}
