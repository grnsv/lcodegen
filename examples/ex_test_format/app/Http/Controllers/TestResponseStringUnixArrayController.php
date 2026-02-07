<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUnixArrayController as BaseTestResponseStringUnixArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUnixArrayResponse;

final class TestResponseStringUnixArrayController extends BaseTestResponseStringUnixArrayController
{
    /**
     * POST /test_response_string_unix_array
     */
    public function testResponseStringUnixArray(
        Request $request,
    ): TestResponseStringUnixArrayResponse
    {
        // TODO: Implement TestResponseStringUnixArray
        throw new \BadMethodCallException('Not implemented');
    }
}
