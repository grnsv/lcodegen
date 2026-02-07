<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUintArrayController as BaseTestResponseIntegerUintArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUintArrayResponse;

final class TestResponseIntegerUintArrayController extends BaseTestResponseIntegerUintArrayController
{
    /**
     * POST /test_response_integer_uint_array
     */
    public function testResponseIntegerUintArray(
        Request $request,
    ): TestResponseIntegerUintArrayResponse
    {
        // TODO: Implement TestResponseIntegerUintArray
        throw new \BadMethodCallException('Not implemented');
    }
}
