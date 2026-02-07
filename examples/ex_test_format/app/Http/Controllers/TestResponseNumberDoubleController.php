<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberDoubleController as BaseTestResponseNumberDoubleController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberDoubleResponse;

final class TestResponseNumberDoubleController extends BaseTestResponseNumberDoubleController
{
    /**
     * POST /test_response_number_double
     */
    public function testResponseNumberDouble(
        Request $request,
    ): TestResponseNumberDoubleResponse
    {
        // TODO: Implement TestResponseNumberDouble
        throw new \BadMethodCallException('Not implemented');
    }
}
