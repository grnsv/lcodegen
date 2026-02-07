<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TestResponseIntegerNullableArrayController as BaseTestResponseIntegerNullableArrayController;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\TestResponseIntegerNullableArrayResponse;

final class TestResponseIntegerNullableArrayController extends BaseTestResponseIntegerNullableArrayController
{
    /**
     * POST /test_response_integer_nullable_array
     */
    public function testResponseIntegerNullableArray(
        Request $request,
    ): TestResponseIntegerNullableArrayResponse
    {
        // TODO: Implement TestResponseIntegerNullableArray
        throw new \BadMethodCallException('Not implemented');
    }
}
