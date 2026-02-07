<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerUint64Controller as BaseTestResponseIntegerUint64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerUint64Response;

final class TestResponseIntegerUint64Controller extends BaseTestResponseIntegerUint64Controller
{
    /**
     * POST /test_response_integer_uint64
     */
    public function testResponseIntegerUint64(
        Request $request,
    ): TestResponseIntegerUint64Response
    {
        // TODO: Implement TestResponseIntegerUint64
        throw new \BadMethodCallException('Not implemented');
    }
}
