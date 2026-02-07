<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIpArrayController as BaseTestResponseStringIpArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIpArrayResponse;

final class TestResponseStringIpArrayController extends BaseTestResponseStringIpArrayController
{
    /**
     * POST /test_response_string_ip_array
     */
    public function testResponseStringIpArray(
        Request $request,
    ): TestResponseStringIpArrayResponse
    {
        // TODO: Implement TestResponseStringIpArray
        throw new \BadMethodCallException('Not implemented');
    }
}
