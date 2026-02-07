<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestNullController as BaseTestRequestNullController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestNullResponse;

final class TestRequestNullController extends BaseTestRequestNullController
{
    /**
     * POST /test_request_null
     */
    public function testRequestNull(
        Request $request,
    ): TestRequestNullResponse
    {
        // TODO: Implement TestRequestNull
        throw new \BadMethodCallException('Not implemented');
    }
}
