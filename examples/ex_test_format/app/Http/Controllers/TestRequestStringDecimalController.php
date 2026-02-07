<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringDecimalController as BaseTestRequestStringDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringDecimalResponse;

final class TestRequestStringDecimalController extends BaseTestRequestStringDecimalController
{
    /**
     * POST /test_request_string_decimal
     */
    public function testRequestStringDecimal(
        Request $request,
    ): TestRequestStringDecimalResponse
    {
        // TODO: Implement TestRequestStringDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
