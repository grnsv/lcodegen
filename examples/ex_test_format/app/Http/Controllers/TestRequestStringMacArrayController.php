<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringMacArrayController as BaseTestRequestStringMacArrayController;
use App\Http\Requests\TestRequestStringMacArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringMacArrayResponse;

final class TestRequestStringMacArrayController extends BaseTestRequestStringMacArrayController
{
    /**
     * POST /test_request_string_mac_array
     */
    public function testRequestStringMacArray(
        TestRequestStringMacArrayRequest $request,
    ): TestRequestStringMacArrayResponse
    {
        // TODO: Implement TestRequestStringMacArray
        throw new \BadMethodCallException('Not implemented');
    }
}
