<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint32Controller as BaseTestResponseIntegerUint32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint32Response;

final class TestResponseIntegerUint32Controller extends BaseTestResponseIntegerUint32Controller
{
    /**
     * POST /test_response_integer_uint32
     */
    public function testResponseIntegerUint32(
        Request $request,
    ): TestResponseIntegerUint32Response
    {
        // TODO: Implement TestResponseIntegerUint32
        throw new \BadMethodCallException('Not implemented');
    }
}
