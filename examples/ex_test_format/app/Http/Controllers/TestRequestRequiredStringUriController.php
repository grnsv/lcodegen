<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredStringUriController as BaseTestRequestRequiredStringUriController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredStringUriResponse;

final class TestRequestRequiredStringUriController extends BaseTestRequestRequiredStringUriController
{
    /**
     * POST /test_request_required_string_uri
     */
    public function testRequestRequiredStringUri(
        Request $request,
    ): TestRequestRequiredStringUriResponse
    {
        // TODO: Implement TestRequestRequiredStringUri
        throw new \BadMethodCallException('Not implemented');
    }
}
