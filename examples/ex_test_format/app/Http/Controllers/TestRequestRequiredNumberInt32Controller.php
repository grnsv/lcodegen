<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredNumberInt32Controller as BaseTestRequestRequiredNumberInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredNumberInt32Response;

final class TestRequestRequiredNumberInt32Controller extends BaseTestRequestRequiredNumberInt32Controller
{
    /**
     * POST /test_request_required_number_int32
     */
    public function testRequestRequiredNumberInt32(
        Request $request,
    ): TestRequestRequiredNumberInt32Response
    {
        // TODO: Implement TestRequestRequiredNumberInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
