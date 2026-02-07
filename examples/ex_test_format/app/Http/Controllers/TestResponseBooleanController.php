<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseBooleanController as BaseTestResponseBooleanController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseBooleanResponse;

final class TestResponseBooleanController extends BaseTestResponseBooleanController
{
    /**
     * POST /test_response_boolean
     */
    public function testResponseBoolean(
        Request $request,
    ): TestResponseBooleanResponse
    {
        // TODO: Implement TestResponseBoolean
        throw new \BadMethodCallException('Not implemented');
    }
}
