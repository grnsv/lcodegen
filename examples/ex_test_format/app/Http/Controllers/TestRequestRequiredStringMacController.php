<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringMacController as BaseTestRequestRequiredStringMacController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringMacResponse;

final class TestRequestRequiredStringMacController extends BaseTestRequestRequiredStringMacController
{
    /**
     * POST /test_request_required_string_mac
     */
    public function testRequestRequiredStringMac(
        Request $request,
    ): TestRequestRequiredStringMacResponse
    {
        // TODO: Implement TestRequestRequiredStringMac
        throw new \BadMethodCallException('Not implemented');
    }
}
