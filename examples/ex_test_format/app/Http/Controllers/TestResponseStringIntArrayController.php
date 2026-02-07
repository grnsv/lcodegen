<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringIntArrayController as BaseTestResponseStringIntArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringIntArrayResponse;

final class TestResponseStringIntArrayController extends BaseTestResponseStringIntArrayController
{
    /**
     * POST /test_response_string_int_array
     */
    public function testResponseStringIntArray(
        Request $request,
    ): TestResponseStringIntArrayResponse
    {
        // TODO: Implement TestResponseStringIntArray
        throw new \BadMethodCallException('Not implemented');
    }
}
