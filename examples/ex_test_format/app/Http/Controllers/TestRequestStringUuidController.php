<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUuidController as BaseTestRequestStringUuidController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUuidResponse;

final class TestRequestStringUuidController extends BaseTestRequestStringUuidController
{
    /**
     * POST /test_request_string_uuid
     */
    public function testRequestStringUuid(
        Request $request,
    ): TestRequestStringUuidResponse
    {
        // TODO: Implement TestRequestStringUuid
        throw new \BadMethodCallException('Not implemented');
    }
}
