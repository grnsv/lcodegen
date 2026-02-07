<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestBooleanController as BaseTestRequestBooleanController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestBooleanResponse;

final class TestRequestBooleanController extends BaseTestRequestBooleanController
{
    /**
     * POST /test_request_boolean
     */
    public function testRequestBoolean(
        Request $request,
    ): TestRequestBooleanResponse
    {
        // TODO: Implement TestRequestBoolean
        throw new \BadMethodCallException('Not implemented');
    }
}
