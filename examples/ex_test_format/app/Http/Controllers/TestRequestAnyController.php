<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestAnyController as BaseTestRequestAnyController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestAnyResponse;

final class TestRequestAnyController extends BaseTestRequestAnyController
{
    /**
     * POST /test_request_Any
     */
    public function testRequestAny(
        Request $request,
    ): TestRequestAnyResponse
    {
        // TODO: Implement TestRequestAny
        throw new \BadMethodCallException('Not implemented');
    }
}
