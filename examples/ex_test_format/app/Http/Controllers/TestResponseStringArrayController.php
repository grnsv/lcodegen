<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringArrayController as BaseTestResponseStringArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringArrayResponse;

final class TestResponseStringArrayController extends BaseTestResponseStringArrayController
{
    /**
     * POST /test_response_string_array
     */
    public function testResponseStringArray(
        Request $request,
    ): TestResponseStringArrayResponse
    {
        // TODO: Implement TestResponseStringArray
        throw new \BadMethodCallException('Not implemented');
    }
}
