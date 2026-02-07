<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUintController as BaseTestResponseIntegerUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUintResponse;

final class TestResponseIntegerUintController extends BaseTestResponseIntegerUintController
{
    /**
     * POST /test_response_integer_uint
     */
    public function testResponseIntegerUint(
        Request $request,
    ): TestResponseIntegerUintResponse
    {
        // TODO: Implement TestResponseIntegerUint
        throw new \BadMethodCallException('Not implemented');
    }
}
