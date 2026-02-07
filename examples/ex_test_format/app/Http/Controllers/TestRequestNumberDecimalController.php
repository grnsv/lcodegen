<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberDecimalController as BaseTestRequestNumberDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberDecimalResponse;

final class TestRequestNumberDecimalController extends BaseTestRequestNumberDecimalController
{
    /**
     * POST /test_request_number_decimal
     */
    public function testRequestNumberDecimal(
        Request $request,
    ): TestRequestNumberDecimalResponse
    {
        // TODO: Implement TestRequestNumberDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
