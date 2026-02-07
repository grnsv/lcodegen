<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIntController as BaseTestResponseStringIntController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIntResponse;

final class TestResponseStringIntController extends BaseTestResponseStringIntController
{
    /**
     * POST /test_response_string_int
     */
    public function testResponseStringInt(
        Request $request,
    ): TestResponseStringIntResponse
    {
        // TODO: Implement TestResponseStringInt
        throw new \BadMethodCallException('Not implemented');
    }
}
