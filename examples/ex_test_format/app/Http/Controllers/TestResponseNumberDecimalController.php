<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberDecimalController as BaseTestResponseNumberDecimalController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberDecimalResponse;

final class TestResponseNumberDecimalController extends BaseTestResponseNumberDecimalController
{
    /**
     * POST /test_response_number_decimal
     */
    public function testResponseNumberDecimal(
        Request $request,
    ): TestResponseNumberDecimalResponse
    {
        // TODO: Implement TestResponseNumberDecimal
        throw new \BadMethodCallException('Not implemented');
    }
}
