<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberController as BaseTestRequestRequiredNumberController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberResponse;

final class TestRequestRequiredNumberController extends BaseTestRequestRequiredNumberController
{
    /**
     * POST /test_request_required_number
     */
    public function testRequestRequiredNumber(
        Request $request,
    ): TestRequestRequiredNumberResponse
    {
        // TODO: Implement TestRequestRequiredNumber
        throw new \BadMethodCallException('Not implemented');
    }
}
