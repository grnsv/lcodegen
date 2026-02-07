<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixNanoController as BaseTestResponseIntegerUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixNanoResponse;

final class TestResponseIntegerUnixNanoController extends BaseTestResponseIntegerUnixNanoController
{
    /**
     * POST /test_response_integer_unix-nano
     */
    public function testResponseIntegerUnixNano(
        Request $request,
    ): TestResponseIntegerUnixNanoResponse
    {
        // TODO: Implement TestResponseIntegerUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
