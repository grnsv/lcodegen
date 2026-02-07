<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\StopMessageLiveLocationController as BaseStopMessageLiveLocationController;
use App\Http\Requests\StopMessageLiveLocationRequest;
use App\Http\Responses\OpenApi\StopMessageLiveLocationResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class StopMessageLiveLocationController extends BaseStopMessageLiveLocationController
{
    /**
     * POST /stopMessageLiveLocation
     */
    public function stopMessageLiveLocation(
        StopMessageLiveLocationRequest $request,
    ): StopMessageLiveLocationResponse|ErrorResponse
    {
        // TODO: Implement StopMessageLiveLocation
        throw new \BadMethodCallException('Not implemented');
    }
}
