<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringPasswordController as BaseTestRequestRequiredStringPasswordController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringPasswordResponse;

final class TestRequestRequiredStringPasswordController extends BaseTestRequestRequiredStringPasswordController
{
    /**
     * POST /test_request_required_string_password
     */
    public function testRequestRequiredStringPassword(
        Request $request,
    ): TestRequestRequiredStringPasswordResponse
    {
        // TODO: Implement TestRequestRequiredStringPassword
        throw new \BadMethodCallException('Not implemented');
    }
}
