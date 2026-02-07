<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendPollController as BaseSendPollController;
use App\Http\Requests\SendPollRequest;
use App\Http\Responses\OpenApi\SendPollResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendPollController extends BaseSendPollController
{
    /**
     * POST /sendPoll
     */
    public function sendPoll(
        SendPollRequest $request,
    ): SendPollResponse|ErrorResponse
    {
        // TODO: Implement SendPoll
        throw new \BadMethodCallException('Not implemented');
    }
}
