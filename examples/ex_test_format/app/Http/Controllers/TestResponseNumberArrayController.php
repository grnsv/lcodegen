<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberArrayController as BaseTestResponseNumberArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberArrayResponse;

final class TestResponseNumberArrayController extends BaseTestResponseNumberArrayController
{
    /**
     * POST /test_response_number_array
     */
    public function testResponseNumberArray(
        Request $request,
    ): TestResponseNumberArrayResponse
    {
        // TODO: Implement TestResponseNumberArray
        throw new \BadMethodCallException('Not implemented');
    }
}
