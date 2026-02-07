<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringHostnameController as BaseTestResponseStringHostnameController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringHostnameResponse;

final class TestResponseStringHostnameController extends BaseTestResponseStringHostnameController
{
    /**
     * POST /test_response_string_hostname
     */
    public function testResponseStringHostname(
        Request $request,
    ): TestResponseStringHostnameResponse
    {
        // TODO: Implement TestResponseStringHostname
        throw new \BadMethodCallException('Not implemented');
    }
}
