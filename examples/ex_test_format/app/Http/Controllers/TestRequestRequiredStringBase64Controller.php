<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringBase64Controller as BaseTestRequestRequiredStringBase64Controller;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringBase64Response;

final class TestRequestRequiredStringBase64Controller extends BaseTestRequestRequiredStringBase64Controller
{
    /**
     * POST /test_request_required_string_base64
     */
    public function testRequestRequiredStringBase64(
        Request $request,
    ): TestRequestRequiredStringBase64Response
    {
        // TODO: Implement TestRequestRequiredStringBase64
        throw new \BadMethodCallException('Not implemented');
    }
}
