<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringController as BaseTestRequestStringController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringResponse;

final class TestRequestStringController extends BaseTestRequestStringController
{
    /**
     * POST /test_request_string
     */
    public function testRequestString(
        Request $request,
    ): TestRequestStringResponse
    {
        // TODO: Implement TestRequestString
        throw new \BadMethodCallException('Not implemented');
    }
}
