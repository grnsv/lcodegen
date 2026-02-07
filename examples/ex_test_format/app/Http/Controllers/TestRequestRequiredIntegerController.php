<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerController as BaseTestRequestRequiredIntegerController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerResponse;

final class TestRequestRequiredIntegerController extends BaseTestRequestRequiredIntegerController
{
    /**
     * POST /test_request_required_integer
     */
    public function testRequestRequiredInteger(
        Request $request,
    ): TestRequestRequiredIntegerResponse
    {
        // TODO: Implement TestRequestRequiredInteger
        throw new \BadMethodCallException('Not implemented');
    }
}
