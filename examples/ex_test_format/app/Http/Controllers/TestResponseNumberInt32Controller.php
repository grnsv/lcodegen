<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberInt32Controller as BaseTestResponseNumberInt32Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberInt32Response;

final class TestResponseNumberInt32Controller extends BaseTestResponseNumberInt32Controller
{
    /**
     * POST /test_response_number_int32
     */
    public function testResponseNumberInt32(
        Request $request,
    ): TestResponseNumberInt32Response
    {
        // TODO: Implement TestResponseNumberInt32
        throw new \BadMethodCallException('Not implemented');
    }
}
