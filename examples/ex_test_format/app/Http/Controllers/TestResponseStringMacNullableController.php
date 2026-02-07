<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringMacNullableController as BaseTestResponseStringMacNullableController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringMacNullableResponse;

final class TestResponseStringMacNullableController extends BaseTestResponseStringMacNullableController
{
    /**
     * POST /test_response_string_mac_nullable
     */
    public function testResponseStringMacNullable(
        Request $request,
    ): TestResponseStringMacNullableResponse
    {
        // TODO: Implement TestResponseStringMacNullable
        throw new \BadMethodCallException('Not implemented');
    }
}
