<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDateController as BaseTestResponseStringDateController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDateResponse;

final class TestResponseStringDateController extends BaseTestResponseStringDateController
{
    /**
     * POST /test_response_string_date
     */
    public function testResponseStringDate(
        Request $request,
    ): TestResponseStringDateResponse
    {
        // TODO: Implement TestResponseStringDate
        throw new \BadMethodCallException('Not implemented');
    }
}
