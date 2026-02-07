<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseFormatTestController as BaseTestResponseFormatTestController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseFormatTestResponse;

final class TestResponseFormatTestController extends BaseTestResponseFormatTestController
{
    /**
     * POST /test_response_FormatTest
     */
    public function testResponseFormatTest(
        Request $request,
    ): TestResponseFormatTestResponse
    {
        // TODO: Implement TestResponseFormatTest
        throw new \BadMethodCallException('Not implemented');
    }
}
