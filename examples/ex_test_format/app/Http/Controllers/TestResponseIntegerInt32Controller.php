<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerInt32Controller as BaseTestResponseIntegerInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerInt32Response;

final class TestResponseIntegerInt32Controller extends BaseTestResponseIntegerInt32Controller
{
    /**
     * POST /test_response_integer_int32
     */
    public function testResponseIntegerInt32(
        Request $request,
    ): TestResponseIntegerInt32Response
    {
        // TODO: Implement TestResponseIntegerInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
