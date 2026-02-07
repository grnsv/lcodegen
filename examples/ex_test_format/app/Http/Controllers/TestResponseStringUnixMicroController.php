<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixMicroController as BaseTestResponseStringUnixMicroController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixMicroResponse;

final class TestResponseStringUnixMicroController extends BaseTestResponseStringUnixMicroController
{
    /**
     * POST /test_response_string_unix-micro
     */
    public function testResponseStringUnixMicro(
        Request $request,
    ): TestResponseStringUnixMicroResponse
    {
        // TODO: Implement TestResponseStringUnixMicro
        throw new \BadMethodCallException('Not implemented');
    }
}
