<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixMicroController as BaseTestResponseIntegerUnixMicroController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixMicroResponse;

final class TestResponseIntegerUnixMicroController extends BaseTestResponseIntegerUnixMicroController
{
    /**
     * POST /test_response_integer_unix-micro
     */
    public function testResponseIntegerUnixMicro(
        Request $request,
    ): TestResponseIntegerUnixMicroResponse
    {
        // TODO: Implement TestResponseIntegerUnixMicro
        throw new \BadMethodCallException('Not implemented');
    }
}
