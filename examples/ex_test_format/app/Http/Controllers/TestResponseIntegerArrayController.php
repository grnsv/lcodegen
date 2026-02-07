<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerArrayController as BaseTestResponseIntegerArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerArrayResponse;

final class TestResponseIntegerArrayController extends BaseTestResponseIntegerArrayController
{
    /**
     * POST /test_response_integer_array
     */
    public function testResponseIntegerArray(
        Request $request,
    ): TestResponseIntegerArrayResponse
    {
        // TODO: Implement TestResponseIntegerArray
        throw new \BadMethodCallException('Not implemented');
    }
}
