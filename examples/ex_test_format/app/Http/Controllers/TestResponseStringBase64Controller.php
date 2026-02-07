<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringBase64Controller as BaseTestResponseStringBase64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringBase64Response;

final class TestResponseStringBase64Controller extends BaseTestResponseStringBase64Controller
{
    /**
     * POST /test_response_string_base64
     */
    public function testResponseStringBase64(
        Request $request,
    ): TestResponseStringBase64Response
    {
        // TODO: Implement TestResponseStringBase64
        throw new \BadMethodCallException('Not implemented');
    }
}
