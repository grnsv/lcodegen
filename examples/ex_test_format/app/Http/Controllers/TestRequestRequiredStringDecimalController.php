<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringDecimalController as BaseTestRequestRequiredStringDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringDecimalResponse;

final class TestRequestRequiredStringDecimalController extends BaseTestRequestRequiredStringDecimalController
{
    /**
     * POST /test_request_required_string_decimal
     */
    public function testRequestRequiredStringDecimal(
        Request $request,
    ): TestRequestRequiredStringDecimalResponse
    {
        // TODO: Implement TestRequestRequiredStringDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
