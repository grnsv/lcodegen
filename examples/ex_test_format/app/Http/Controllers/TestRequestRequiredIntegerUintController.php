<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerUintController as BaseTestRequestRequiredIntegerUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerUintResponse;

final class TestRequestRequiredIntegerUintController extends BaseTestRequestRequiredIntegerUintController
{
    /**
     * POST /test_request_required_integer_uint
     */
    public function testRequestRequiredIntegerUint(
        Request $request,
    ): TestRequestRequiredIntegerUintResponse
    {
        // TODO: Implement TestRequestRequiredIntegerUint
        throw new \BadMethodCallException('Not implemented');
    }
}
