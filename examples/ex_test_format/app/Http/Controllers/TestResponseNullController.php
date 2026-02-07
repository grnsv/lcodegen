<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNullController as BaseTestResponseNullController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNullResponse;

final class TestResponseNullController extends BaseTestResponseNullController
{
    /**
     * POST /test_response_null
     */
    public function testResponseNull(
        Request $request,
    ): TestResponseNullResponse
    {
        // TODO: Implement TestResponseNull
        throw new \BadMethodCallException('Not implemented');
    }
}
