<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringUuidArrayController as BaseTestResponseStringUuidArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringUuidArrayResponse;

final class TestResponseStringUuidArrayController extends BaseTestResponseStringUuidArrayController
{
    /**
     * POST /test_response_string_uuid_array
     */
    public function testResponseStringUuidArray(
        Request $request,
    ): TestResponseStringUuidArrayResponse
    {
        // TODO: Implement TestResponseStringUuidArray
        throw new \BadMethodCallException('Not implemented');
    }
}
