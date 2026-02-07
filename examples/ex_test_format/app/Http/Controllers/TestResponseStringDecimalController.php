<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDecimalController as BaseTestResponseStringDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDecimalResponse;

final class TestResponseStringDecimalController extends BaseTestResponseStringDecimalController
{
    /**
     * POST /test_response_string_decimal
     */
    public function testResponseStringDecimal(
        Request $request,
    ): TestResponseStringDecimalResponse
    {
        // TODO: Implement TestResponseStringDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
