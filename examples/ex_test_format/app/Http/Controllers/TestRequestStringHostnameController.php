<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringHostnameController as BaseTestRequestStringHostnameController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringHostnameResponse;

final class TestRequestStringHostnameController extends BaseTestRequestStringHostnameController
{
    /**
     * POST /test_request_string_hostname
     */
    public function testRequestStringHostname(
        Request $request,
    ): TestRequestStringHostnameResponse
    {
        // TODO: Implement TestRequestStringHostname
        throw new \BadMethodCallException('Not implemented');
    }
}
