<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\StopPollController as BaseStopPollController;
use App\Http\Requests\StopPollRequest;
use App\Http\Responses\OpenApi\StopPollResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class StopPollController extends BaseStopPollController
{
    /**
     * POST /stopPoll
     */
    public function stopPoll(
        StopPollRequest $request,
    ): StopPollResponse|ErrorResponse
    {
        // TODO: Implement StopPoll
        throw new \BadMethodCallException('Not implemented');
    }
}
