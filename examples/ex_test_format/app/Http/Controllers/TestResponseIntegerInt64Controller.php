<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt64Controller as BaseTestResponseIntegerInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt64Response;

final class TestResponseIntegerInt64Controller extends BaseTestResponseIntegerInt64Controller
{
    /**
     * POST /test_response_integer_int64
     */
    public function testResponseIntegerInt64(
        Request $request,
    ): TestResponseIntegerInt64Response
    {
        // TODO: Implement TestResponseIntegerInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
