<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberDecimalController as BaseTestRequestRequiredNumberDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberDecimalResponse;

final class TestRequestRequiredNumberDecimalController extends BaseTestRequestRequiredNumberDecimalController
{
    /**
     * POST /test_request_required_number_decimal
     */
    public function testRequestRequiredNumberDecimal(
        Request $request,
    ): TestRequestRequiredNumberDecimalResponse
    {
        // TODO: Implement TestRequestRequiredNumberDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
