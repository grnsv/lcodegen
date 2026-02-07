<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringMacArrayController as BaseTestResponseStringMacArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringMacArrayResponse;

final class TestResponseStringMacArrayController extends BaseTestResponseStringMacArrayController
{
    /**
     * POST /test_response_string_mac_array
     */
    public function testResponseStringMacArray(
        Request $request,
    ): TestResponseStringMacArrayResponse
    {
        // TODO: Implement TestResponseStringMacArray
        throw new \BadMethodCallException('Not implemented');
    }
}
