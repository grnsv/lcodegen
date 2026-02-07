<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUuidController as BaseTestRequestRequiredStringUuidController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUuidResponse;

final class TestRequestRequiredStringUuidController extends BaseTestRequestRequiredStringUuidController
{
    /**
     * POST /test_request_required_string_uuid
     */
    public function testRequestRequiredStringUuid(
        Request $request,
    ): TestRequestRequiredStringUuidResponse
    {
        // TODO: Implement TestRequestRequiredStringUuid
        throw new \BadMethodCallException('Not implemented');
    }
}
