<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseBooleanArrayController as BaseTestResponseBooleanArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseBooleanArrayResponse;

final class TestResponseBooleanArrayController extends BaseTestResponseBooleanArrayController
{
    /**
     * POST /test_response_boolean_array
     */
    public function testResponseBooleanArray(
        Request $request,
    ): TestResponseBooleanArrayResponse
    {
        // TODO: Implement TestResponseBooleanArray
        throw new \BadMethodCallException('Not implemented');
    }
}
