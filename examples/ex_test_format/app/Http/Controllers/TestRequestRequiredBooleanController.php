<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredBooleanController as BaseTestRequestRequiredBooleanController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredBooleanResponse;

final class TestRequestRequiredBooleanController extends BaseTestRequestRequiredBooleanController
{
    /**
     * POST /test_request_required_boolean
     */
    public function testRequestRequiredBoolean(
        Request $request,
    ): TestRequestRequiredBooleanResponse
    {
        // TODO: Implement TestRequestRequiredBoolean
        throw new \BadMethodCallException('Not implemented');
    }
}
