<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringBase64Controller as BaseTestRequestStringBase64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringBase64Response;

final class TestRequestStringBase64Controller extends BaseTestRequestStringBase64Controller
{
    /**
     * POST /test_request_string_base64
     */
    public function testRequestStringBase64(
        Request $request,
    ): TestRequestStringBase64Response
    {
        // TODO: Implement TestRequestStringBase64
        throw new \BadMethodCallException('Not implemented');
    }
}
