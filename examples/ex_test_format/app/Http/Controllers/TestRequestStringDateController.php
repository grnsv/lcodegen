<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringDateController as BaseTestRequestStringDateController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringDateResponse;

final class TestRequestStringDateController extends BaseTestRequestStringDateController
{
    /**
     * POST /test_request_string_date
     */
    public function testRequestStringDate(
        Request $request,
    ): TestRequestStringDateResponse
    {
        // TODO: Implement TestRequestStringDate
        throw new \BadMethodCallException('Not implemented');
    }
}
