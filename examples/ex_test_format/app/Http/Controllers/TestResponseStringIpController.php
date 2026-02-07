<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIpController as BaseTestResponseStringIpController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIpResponse;

final class TestResponseStringIpController extends BaseTestResponseStringIpController
{
    /**
     * POST /test_response_string_ip
     */
    public function testResponseStringIp(
        Request $request,
    ): TestResponseStringIpResponse
    {
        // TODO: Implement TestResponseStringIp
        throw new \BadMethodCallException('Not implemented');
    }
}
