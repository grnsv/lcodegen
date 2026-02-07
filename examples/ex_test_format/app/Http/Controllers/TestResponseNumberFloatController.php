<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberFloatController as BaseTestResponseNumberFloatController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberFloatResponse;

final class TestResponseNumberFloatController extends BaseTestResponseNumberFloatController
{
    /**
     * POST /test_response_number_float
     */
    public function testResponseNumberFloat(
        Request $request,
    ): TestResponseNumberFloatResponse
    {
        // TODO: Implement TestResponseNumberFloat
        throw new \BadMethodCallException('Not implemented');
    }
}
