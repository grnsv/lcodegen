<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringEmailController as BaseTestRequestRequiredStringEmailController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringEmailResponse;

final class TestRequestRequiredStringEmailController extends BaseTestRequestRequiredStringEmailController
{
    /**
     * POST /test_request_required_string_email
     */
    public function testRequestRequiredStringEmail(
        Request $request,
    ): TestRequestRequiredStringEmailResponse
    {
        // TODO: Implement TestRequestRequiredStringEmail
        throw new \BadMethodCallException('Not implemented');
    }
}
