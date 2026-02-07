<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIpNullableController as BaseTestResponseStringIpNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIpNullableResponse;

final class TestResponseStringIpNullableController extends BaseTestResponseStringIpNullableController
{
    /**
     * POST /test_response_string_ip_nullable
     */
    public function testResponseStringIpNullable(
        Request $request,
    ): TestResponseStringIpNullableResponse
    {
        // TODO: Implement TestResponseStringIpNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
