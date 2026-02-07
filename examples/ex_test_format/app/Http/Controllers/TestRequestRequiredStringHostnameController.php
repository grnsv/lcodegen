<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringHostnameController as BaseTestRequestRequiredStringHostnameController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringHostnameResponse;

final class TestRequestRequiredStringHostnameController extends BaseTestRequestRequiredStringHostnameController
{
    /**
     * POST /test_request_required_string_hostname
     */
    public function testRequestRequiredStringHostname(
        Request $request,
    ): TestRequestRequiredStringHostnameResponse
    {
        // TODO: Implement TestRequestRequiredStringHostname
        throw new \BadMethodCallException('Not implemented');
    }
}
