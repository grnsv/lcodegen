<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseStringEmailController as BaseTestResponseStringEmailController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseStringEmailResponse;

final class TestResponseStringEmailController extends BaseTestResponseStringEmailController
{
    /**
     * POST /test_response_string_email
     */
    public function testResponseStringEmail(
        Request $request,
    ): TestResponseStringEmailResponse
    {
        // TODO: Implement TestResponseStringEmail
        throw new \BadMethodCallException('Not implemented');
    }
}
