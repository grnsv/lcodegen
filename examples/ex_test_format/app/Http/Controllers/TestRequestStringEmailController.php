<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringEmailController as BaseTestRequestStringEmailController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringEmailResponse;

final class TestRequestStringEmailController extends BaseTestRequestStringEmailController
{
    /**
     * POST /test_request_string_email
     */
    public function testRequestStringEmail(
        Request $request,
    ): TestRequestStringEmailResponse
    {
        // TODO: Implement TestRequestStringEmail
        throw new \BadMethodCallException('Not implemented');
    }
}
