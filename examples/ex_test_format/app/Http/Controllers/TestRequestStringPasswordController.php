<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringPasswordController as BaseTestRequestStringPasswordController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringPasswordResponse;

final class TestRequestStringPasswordController extends BaseTestRequestStringPasswordController
{
    /**
     * POST /test_request_string_password
     */
    public function testRequestStringPassword(
        Request $request,
    ): TestRequestStringPasswordResponse
    {
        // TODO: Implement TestRequestStringPassword
        throw new \BadMethodCallException('Not implemented');
    }
}
