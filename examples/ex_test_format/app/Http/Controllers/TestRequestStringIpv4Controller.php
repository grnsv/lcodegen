<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIpv4Controller as BaseTestRequestStringIpv4Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringIpv4Response;

final class TestRequestStringIpv4Controller extends BaseTestRequestStringIpv4Controller
{
    /**
     * POST /test_request_string_ipv4
     */
    public function testRequestStringIpv4(
        Request $request,
    ): TestRequestStringIpv4Response
    {
        // TODO: Implement TestRequestStringIpv4
        throw new \BadMethodCallException('Not implemented');
    }
}
