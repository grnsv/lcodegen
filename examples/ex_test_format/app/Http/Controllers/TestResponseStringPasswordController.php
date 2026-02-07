<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringPasswordController as BaseTestResponseStringPasswordController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringPasswordResponse;

final class TestResponseStringPasswordController extends BaseTestResponseStringPasswordController
{
    /**
     * POST /test_response_string_password
     */
    public function testResponseStringPassword(
        Request $request,
    ): TestResponseStringPasswordResponse
    {
        // TODO: Implement TestResponseStringPassword
        throw new \BadMethodCallException('Not implemented');
    }
}
