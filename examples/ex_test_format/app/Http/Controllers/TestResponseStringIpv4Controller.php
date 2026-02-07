<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIpv4Controller as BaseTestResponseStringIpv4Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIpv4Response;

final class TestResponseStringIpv4Controller extends BaseTestResponseStringIpv4Controller
{
    /**
     * POST /test_response_string_ipv4
     */
    public function testResponseStringIpv4(
        Request $request,
    ): TestResponseStringIpv4Response
    {
        // TODO: Implement TestResponseStringIpv4
        throw new \BadMethodCallException('Not implemented');
    }
}
