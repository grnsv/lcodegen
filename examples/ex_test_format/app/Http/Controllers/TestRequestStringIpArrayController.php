<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringIpArrayController as BaseTestRequestStringIpArrayController;
use App\Http\Requests\TestRequestStringIpArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringIpArrayResponse;

final class TestRequestStringIpArrayController extends BaseTestRequestStringIpArrayController
{
    /**
     * POST /test_request_string_ip_array
     */
    public function testRequestStringIpArray(
        TestRequestStringIpArrayRequest $request,
    ): TestRequestStringIpArrayResponse
    {
        // TODO: Implement TestRequestStringIpArray
        throw new \BadMethodCallException('Not implemented');
    }
}
