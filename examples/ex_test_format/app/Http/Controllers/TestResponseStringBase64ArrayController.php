<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringBase64ArrayController as BaseTestResponseStringBase64ArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringBase64ArrayResponse;

final class TestResponseStringBase64ArrayController extends BaseTestResponseStringBase64ArrayController
{
    /**
     * POST /test_response_string_base64_array
     */
    public function testResponseStringBase64Array(
        Request $request,
    ): TestResponseStringBase64ArrayResponse
    {
        // TODO: Implement TestResponseStringBase64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
