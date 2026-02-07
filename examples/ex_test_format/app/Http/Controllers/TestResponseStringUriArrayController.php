<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUriArrayController as BaseTestResponseStringUriArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUriArrayResponse;

final class TestResponseStringUriArrayController extends BaseTestResponseStringUriArrayController
{
    /**
     * POST /test_response_string_uri_array
     */
    public function testResponseStringUriArray(
        Request $request,
    ): TestResponseStringUriArrayResponse
    {
        // TODO: Implement TestResponseStringUriArray
        throw new \BadMethodCallException('Not implemented');
    }
}
