<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNullController as BaseTestRequestRequiredNullController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNullResponse;

final class TestRequestRequiredNullController extends BaseTestRequestRequiredNullController
{
    /**
     * POST /test_request_required_null
     */
    public function testRequestRequiredNull(
        Request $request,
    ): TestRequestRequiredNullResponse
    {
        // TODO: Implement TestRequestRequiredNull
        throw new \BadMethodCallException('Not implemented');
    }
}
