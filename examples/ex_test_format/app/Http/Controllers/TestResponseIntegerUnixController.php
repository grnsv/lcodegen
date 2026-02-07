<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixController as BaseTestResponseIntegerUnixController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixResponse;

final class TestResponseIntegerUnixController extends BaseTestResponseIntegerUnixController
{
    /**
     * POST /test_response_integer_unix
     */
    public function testResponseIntegerUnix(
        Request $request,
    ): TestResponseIntegerUnixResponse
    {
        // TODO: Implement TestResponseIntegerUnix
        throw new \BadMethodCallException('Not implemented');
    }
}
