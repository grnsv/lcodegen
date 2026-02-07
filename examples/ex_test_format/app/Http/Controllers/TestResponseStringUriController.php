<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUriController as BaseTestResponseStringUriController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUriResponse;

final class TestResponseStringUriController extends BaseTestResponseStringUriController
{
    /**
     * POST /test_response_string_uri
     */
    public function testResponseStringUri(
        Request $request,
    ): TestResponseStringUriResponse
    {
        // TODO: Implement TestResponseStringUri
        throw new \BadMethodCallException('Not implemented');
    }
}
