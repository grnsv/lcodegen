<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerUint32Controller as BaseTestRequestRequiredIntegerUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerUint32Response;

final class TestRequestRequiredIntegerUint32Controller extends BaseTestRequestRequiredIntegerUint32Controller
{
    /**
     * POST /test_request_required_integer_uint32
     */
    public function testRequestRequiredIntegerUint32(
        Request $request,
    ): TestRequestRequiredIntegerUint32Response
    {
        // TODO: Implement TestRequestRequiredIntegerUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
