<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringIpController as BaseTestRequestRequiredStringIpController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringIpResponse;

final class TestRequestRequiredStringIpController extends BaseTestRequestRequiredStringIpController
{
    /**
     * POST /test_request_required_string_ip
     */
    public function testRequestRequiredStringIp(
        Request $request,
    ): TestRequestRequiredStringIpResponse
    {
        // TODO: Implement TestRequestRequiredStringIp
        throw new \BadMethodCallException('Not implemented');
    }
}
