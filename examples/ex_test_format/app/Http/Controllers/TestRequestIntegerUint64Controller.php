<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestIntegerUint64Controller as BaseTestRequestIntegerUint64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestIntegerUint64Response;

final class TestRequestIntegerUint64Controller extends BaseTestRequestIntegerUint64Controller
{
    /**
     * POST /test_request_integer_uint64
     */
    public function testRequestIntegerUint64(
        Request $request,
    ): TestRequestIntegerUint64Response
    {
        // TODO: Implement TestRequestIntegerUint64
        throw new \BadMethodCallException('Not implemented');
    }
}
