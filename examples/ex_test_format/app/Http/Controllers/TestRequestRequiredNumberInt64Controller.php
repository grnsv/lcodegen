<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberInt64Controller as BaseTestRequestRequiredNumberInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberInt64Response;

final class TestRequestRequiredNumberInt64Controller extends BaseTestRequestRequiredNumberInt64Controller
{
    /**
     * POST /test_request_required_number_int64
     */
    public function testRequestRequiredNumberInt64(
        Request $request,
    ): TestRequestRequiredNumberInt64Response
    {
        // TODO: Implement TestRequestRequiredNumberInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
