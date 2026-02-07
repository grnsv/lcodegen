<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUintController as BaseTestResponseStringUintController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUintResponse;

final class TestResponseStringUintController extends BaseTestResponseStringUintController
{
    /**
     * POST /test_response_string_uint
     */
    public function testResponseStringUint(
        Request $request,
    ): TestResponseStringUintResponse
    {
        // TODO: Implement TestResponseStringUint
        throw new \BadMethodCallException('Not implemented');
    }
}
