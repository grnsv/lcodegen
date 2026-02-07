<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringByteArrayController as BaseTestRequestRequiredStringByteArrayController;
use App\Http\Requests\TestRequestRequiredStringByteArrayRequest;
use App\Http\Responses\OpenApi\TestRequestRequiredStringByteArrayResponse;

final class TestRequestRequiredStringByteArrayController extends BaseTestRequestRequiredStringByteArrayController
{
    /**
     * POST /test_request_required_string_byte_array
     */
    public function testRequestRequiredStringByteArray(
        TestRequestRequiredStringByteArrayRequest $request,
    ): TestRequestRequiredStringByteArrayResponse
    {
        // TODO: Implement TestRequestRequiredStringByteArray
        throw new \BadMethodCallException('Not implemented');
    }
}
