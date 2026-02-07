<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNumberController as BaseTestRequestNumberController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNumberResponse;

final class TestRequestNumberController extends BaseTestRequestNumberController
{
    /**
     * POST /test_request_number
     */
    public function testRequestNumber(
        Request $request,
    ): TestRequestNumberResponse
    {
        // TODO: Implement TestRequestNumber
        throw new \BadMethodCallException('Not implemented');
    }
}
