<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUuidController as BaseTestResponseStringUuidController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUuidResponse;

final class TestResponseStringUuidController extends BaseTestResponseStringUuidController
{
    /**
     * POST /test_response_string_uuid
     */
    public function testResponseStringUuid(
        Request $request,
    ): TestResponseStringUuidResponse
    {
        // TODO: Implement TestResponseStringUuid
        throw new \BadMethodCallException('Not implemented');
    }
}
