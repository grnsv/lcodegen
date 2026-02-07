<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestRequestRequiredIntegerUnixNanoController as BaseTestRequestRequiredIntegerUnixNanoController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestRequestRequiredIntegerUnixNanoResponse;

final class TestRequestRequiredIntegerUnixNanoController extends BaseTestRequestRequiredIntegerUnixNanoController
{
    /**
     * POST /test_request_required_integer_unix-nano
     */
    public function testRequestRequiredIntegerUnixNano(
        Request $request,
    ): TestRequestRequiredIntegerUnixNanoResponse
    {
        // TODO: Implement TestRequestRequiredIntegerUnixNano
        throw new \BadMethodCallException('Not implemented');
    }
}
