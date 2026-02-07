<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberInt64Controller as BaseTestResponseNumberInt64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberInt64Response;

final class TestResponseNumberInt64Controller extends BaseTestResponseNumberInt64Controller
{
    /**
     * POST /test_response_number_int64
     */
    public function testResponseNumberInt64(
        Request $request,
    ): TestResponseNumberInt64Response
    {
        // TODO: Implement TestResponseNumberInt64
        throw new \BadMethodCallException('Not implemented');
    }
}
