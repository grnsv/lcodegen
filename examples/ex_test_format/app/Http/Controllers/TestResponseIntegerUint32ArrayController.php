<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint32ArrayController as BaseTestResponseIntegerUint32ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint32ArrayResponse;

final class TestResponseIntegerUint32ArrayController extends BaseTestResponseIntegerUint32ArrayController
{
    /**
     * POST /test_response_integer_uint32_array
     */
    public function testResponseIntegerUint32Array(
        Request $request,
    ): TestResponseIntegerUint32ArrayResponse
    {
        // TODO: Implement TestResponseIntegerUint32Array
        throw new \BadMethodCallException('Not implemented');
    }
}
