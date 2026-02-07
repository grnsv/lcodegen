<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIpv6Controller as BaseTestResponseStringIpv6Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIpv6Response;

final class TestResponseStringIpv6Controller extends BaseTestResponseStringIpv6Controller
{
    /**
     * POST /test_response_string_ipv6
     */
    public function testResponseStringIpv6(
        Request $request,
    ): TestResponseStringIpv6Response
    {
        // TODO: Implement TestResponseStringIpv6
        throw new \BadMethodCallException('Not implemented');
    }
}
