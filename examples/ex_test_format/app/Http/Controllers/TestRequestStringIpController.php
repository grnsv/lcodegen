<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIpController as BaseTestRequestStringIpController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringIpResponse;

final class TestRequestStringIpController extends BaseTestRequestStringIpController
{
    /**
     * POST /test_request_string_ip
     */
    public function testRequestStringIp(
        Request $request,
    ): TestRequestStringIpResponse
    {
        // TODO: Implement TestRequestStringIp
        throw new \BadMethodCallException('Not implemented');
    }
}
