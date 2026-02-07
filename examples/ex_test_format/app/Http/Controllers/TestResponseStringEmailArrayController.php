<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringEmailArrayController as BaseTestResponseStringEmailArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringEmailArrayResponse;

final class TestResponseStringEmailArrayController extends BaseTestResponseStringEmailArrayController
{
    /**
     * POST /test_response_string_email_array
     */
    public function testResponseStringEmailArray(
        Request $request,
    ): TestResponseStringEmailArrayResponse
    {
        // TODO: Implement TestResponseStringEmailArray
        throw new \BadMethodCallException('Not implemented');
    }
}
