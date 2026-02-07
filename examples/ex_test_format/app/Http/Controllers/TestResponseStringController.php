<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringController as BaseTestResponseStringController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringResponse;

final class TestResponseStringController extends BaseTestResponseStringController
{
    /**
     * POST /test_response_string
     */
    public function testResponseString(
        Request $request,
    ): TestResponseStringResponse
    {
        // TODO: Implement TestResponseString
        throw new \BadMethodCallException('Not implemented');
    }
}
