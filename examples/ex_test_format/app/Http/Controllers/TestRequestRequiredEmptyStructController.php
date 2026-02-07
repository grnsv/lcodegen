<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredEmptyStructController as BaseTestRequestRequiredEmptyStructController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredEmptyStructResponse;

final class TestRequestRequiredEmptyStructController extends BaseTestRequestRequiredEmptyStructController
{
    /**
     * POST /test_request_required_EmptyStruct
     */
    public function testRequestRequiredEmptyStruct(
        Request $request,
    ): TestRequestRequiredEmptyStructResponse
    {
        // TODO: Implement TestRequestRequiredEmptyStruct
        throw new \BadMethodCallException('Not implemented');
    }
}
