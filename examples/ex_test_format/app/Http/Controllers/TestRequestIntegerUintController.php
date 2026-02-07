<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUintController as BaseTestRequestIntegerUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUintResponse;

final class TestRequestIntegerUintController extends BaseTestRequestIntegerUintController
{
    /**
     * POST /test_request_integer_uint
     */
    public function testRequestIntegerUint(
        Request $request,
    ): TestRequestIntegerUintResponse
    {
        // TODO: Implement TestRequestIntegerUint
        throw new \BadMethodCallException('Not implemented');
    }
}
