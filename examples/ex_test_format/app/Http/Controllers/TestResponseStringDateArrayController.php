<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringDateArrayController as BaseTestResponseStringDateArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringDateArrayResponse;

final class TestResponseStringDateArrayController extends BaseTestResponseStringDateArrayController
{
    /**
     * POST /test_response_string_date_array
     */
    public function testResponseStringDateArray(
        Request $request,
    ): TestResponseStringDateArrayResponse
    {
        // TODO: Implement TestResponseStringDateArray
        throw new \BadMethodCallException('Not implemented');
    }
}
