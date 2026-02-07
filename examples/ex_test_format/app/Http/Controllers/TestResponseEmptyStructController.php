<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseEmptyStructController as BaseTestResponseEmptyStructController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseEmptyStructResponse;

final class TestResponseEmptyStructController extends BaseTestResponseEmptyStructController
{
    /**
     * POST /test_response_EmptyStruct
     */
    public function testResponseEmptyStruct(
        Request $request,
    ): TestResponseEmptyStructResponse
    {
        // TODO: Implement TestResponseEmptyStruct
        throw new \BadMethodCallException('Not implemented');
    }
}
