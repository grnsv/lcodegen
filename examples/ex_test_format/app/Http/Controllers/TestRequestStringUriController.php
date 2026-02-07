<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestStringUriController as BaseTestRequestStringUriController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestStringUriResponse;

final class TestRequestStringUriController extends BaseTestRequestStringUriController
{
    /**
     * POST /test_request_string_uri
     */
    public function testRequestStringUri(
        Request $request,
    ): TestRequestStringUriResponse
    {
        // TODO: Implement TestRequestStringUri
        throw new \BadMethodCallException('Not implemented');
    }
}
