<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringPasswordArrayController as BaseTestResponseStringPasswordArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringPasswordArrayResponse;

final class TestResponseStringPasswordArrayController extends BaseTestResponseStringPasswordArrayController
{
    /**
     * POST /test_response_string_password_array
     */
    public function testResponseStringPasswordArray(
        Request $request,
    ): TestResponseStringPasswordArrayResponse
    {
        // TODO: Implement TestResponseStringPasswordArray
        throw new \BadMethodCallException('Not implemented');
    }
}
