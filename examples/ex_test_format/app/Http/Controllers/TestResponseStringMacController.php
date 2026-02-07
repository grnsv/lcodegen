<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringMacController as BaseTestResponseStringMacController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringMacResponse;

final class TestResponseStringMacController extends BaseTestResponseStringMacController
{
    /**
     * POST /test_response_string_mac
     */
    public function testResponseStringMac(
        Request $request,
    ): TestResponseStringMacResponse
    {
        // TODO: Implement TestResponseStringMac
        throw new \BadMethodCallException('Not implemented');
    }
}
