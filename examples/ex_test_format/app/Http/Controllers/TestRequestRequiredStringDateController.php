<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringDateController as BaseTestRequestRequiredStringDateController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringDateResponse;

final class TestRequestRequiredStringDateController extends BaseTestRequestRequiredStringDateController
{
    /**
     * POST /test_request_required_string_date
     */
    public function testRequestRequiredStringDate(
        Request $request,
    ): TestRequestRequiredStringDateResponse
    {
        // TODO: Implement TestRequestRequiredStringDate
        throw new \BadMethodCallException('Not implemented');
    }
}
