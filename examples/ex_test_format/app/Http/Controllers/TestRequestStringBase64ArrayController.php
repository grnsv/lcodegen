<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringBase64ArrayController as BaseTestRequestStringBase64ArrayController;
use App\Http\Requests\TestRequestStringBase64ArrayRequest;
use App\Http\Responses\OpenApi\TestRequestStringBase64ArrayResponse;

final class TestRequestStringBase64ArrayController extends BaseTestRequestStringBase64ArrayController
{
    /**
     * POST /test_request_string_base64_array
     */
    public function testRequestStringBase64Array(
        TestRequestStringBase64ArrayRequest $request,
    ): TestRequestStringBase64ArrayResponse
    {
        // TODO: Implement TestRequestStringBase64Array
        throw new \BadMethodCallException('Not implemented');
    }
}
