<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestEmptyStructController as BaseTestRequestEmptyStructController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestEmptyStructResponse;

final class TestRequestEmptyStructController extends BaseTestRequestEmptyStructController
{
    /**
     * POST /test_request_EmptyStruct
     */
    public function testRequestEmptyStruct(
        Request $request,
    ): TestRequestEmptyStructResponse
    {
        // TODO: Implement TestRequestEmptyStruct
        throw new \BadMethodCallException('Not implemented');
    }
}
