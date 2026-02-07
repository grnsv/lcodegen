<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredAnyController as BaseTestRequestRequiredAnyController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredAnyResponse;

final class TestRequestRequiredAnyController extends BaseTestRequestRequiredAnyController
{
    /**
     * POST /test_request_required_Any
     */
    public function testRequestRequiredAny(
        Request $request,
    ): TestRequestRequiredAnyResponse
    {
        // TODO: Implement TestRequestRequiredAny
        throw new \BadMethodCallException('Not implemented');
    }
}
