<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerController as BaseTestResponseIntegerController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerResponse;

final class TestResponseIntegerController extends BaseTestResponseIntegerController
{
    /**
     * POST /test_response_integer
     */
    public function testResponseInteger(
        Request $request,
    ): TestResponseIntegerResponse
    {
        // TODO: Implement TestResponseInteger
        throw new \BadMethodCallException('Not implemented');
    }
}
