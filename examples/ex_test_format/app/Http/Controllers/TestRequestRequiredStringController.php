<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringController as BaseTestRequestRequiredStringController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringResponse;

final class TestRequestRequiredStringController extends BaseTestRequestRequiredStringController
{
    /**
     * POST /test_request_required_string
     */
    public function testRequestRequiredString(
        Request $request,
    ): TestRequestRequiredStringResponse
    {
        // TODO: Implement TestRequestRequiredString
        throw new \BadMethodCallException('Not implemented');
    }
}
