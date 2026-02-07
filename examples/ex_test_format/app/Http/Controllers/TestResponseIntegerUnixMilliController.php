<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixMilliController as BaseTestResponseIntegerUnixMilliController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixMilliResponse;

final class TestResponseIntegerUnixMilliController extends BaseTestResponseIntegerUnixMilliController
{
    /**
     * POST /test_response_integer_unix-milli
     */
    public function testResponseIntegerUnixMilli(
        Request $request,
    ): TestResponseIntegerUnixMilliResponse
    {
        // TODO: Implement TestResponseIntegerUnixMilli
        throw new \BadMethodCallException('Not implemented');
    }
}
