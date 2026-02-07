<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TesttestController as BaseTesttestController;
use App\Http\Requests\TesttestRequest;
use App\Http\Responses\OpenApi\ErrorResponse;

final class TesttestController extends BaseTesttestController
{
    /**
     * POST /testtest
     */
    public function testtest(
        TesttestRequest $request,
    ): ErrorResponse
    {
        // TODO: Implement Testtest
        throw new \BadMethodCallException('Not implemented');
    }
}
