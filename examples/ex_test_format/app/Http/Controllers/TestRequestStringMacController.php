<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringMacController as BaseTestRequestStringMacController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringMacResponse;

final class TestRequestStringMacController extends BaseTestRequestStringMacController
{
    /**
     * POST /test_request_string_mac
     */
    public function testRequestStringMac(
        Request $request,
    ): TestRequestStringMacResponse
    {
        // TODO: Implement TestRequestStringMac
        throw new \BadMethodCallException('Not implemented');
    }
}
