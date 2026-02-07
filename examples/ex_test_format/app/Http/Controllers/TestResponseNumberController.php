<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberController as BaseTestResponseNumberController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberResponse;

final class TestResponseNumberController extends BaseTestResponseNumberController
{
    /**
     * POST /test_response_number
     */
    public function testResponseNumber(
        Request $request,
    ): TestResponseNumberResponse
    {
        // TODO: Implement TestResponseNumber
        throw new \BadMethodCallException('Not implemented');
    }
}
