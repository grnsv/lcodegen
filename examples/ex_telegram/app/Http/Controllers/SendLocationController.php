<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendLocationController as BaseSendLocationController;
use App\Http\Requests\SendLocationRequest;
use App\Http\Responses\OpenApi\SendLocationResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendLocationController extends BaseSendLocationController
{
    /**
     * POST /sendLocation
     */
    public function sendLocation(
        SendLocationRequest $request,
    ): SendLocationResponse|ErrorResponse
    {
        // TODO: Implement SendLocation
        throw new \BadMethodCallException('Not implemented');
    }
}
