<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNullArrayController as BaseTestResponseNullArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNullArrayResponse;

final class TestResponseNullArrayController extends BaseTestResponseNullArrayController
{
    /**
     * POST /test_response_null_array
     */
    public function testResponseNullArray(
        Request $request,
    ): TestResponseNullArrayResponse
    {
        // TODO: Implement TestResponseNullArray
        throw new \BadMethodCallException('Not implemented');
    }
}
