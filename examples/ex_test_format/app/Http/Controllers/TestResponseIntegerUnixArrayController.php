<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUnixArrayController as BaseTestResponseIntegerUnixArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUnixArrayResponse;

final class TestResponseIntegerUnixArrayController extends BaseTestResponseIntegerUnixArrayController
{
    /**
     * POST /test_response_integer_unix_array
     */
    public function testResponseIntegerUnixArray(
        Request $request,
    ): TestResponseIntegerUnixArrayResponse
    {
        // TODO: Implement TestResponseIntegerUnixArray
        throw new \BadMethodCallException('Not implemented');
    }
}
