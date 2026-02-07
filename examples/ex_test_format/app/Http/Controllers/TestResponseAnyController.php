<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseAnyController as BaseTestResponseAnyController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseAnyResponse;

final class TestResponseAnyController extends BaseTestResponseAnyController
{
    /**
     * POST /test_response_Any
     */
    public function testResponseAny(
        Request $request,
    ): TestResponseAnyResponse
    {
        // TODO: Implement TestResponseAny
        throw new \BadMethodCallException('Not implemented');
    }
}
