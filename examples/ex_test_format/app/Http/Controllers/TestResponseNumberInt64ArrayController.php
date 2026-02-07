<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseNumberInt64ArrayController as BaseTestResponseNumberInt64ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseNumberInt64ArrayResponse;

final class TestResponseNumberInt64ArrayController extends BaseTestResponseNumberInt64ArrayController
{
    /**
     * POST /test_response_number_int64_array
     */
    public function testResponseNumberInt64Array(
        Request $request,
    ): TestResponseNumberInt64ArrayResponse
    {
        // TODO: Implement TestResponseNumberInt64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
