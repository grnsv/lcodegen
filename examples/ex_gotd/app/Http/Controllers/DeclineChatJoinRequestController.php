<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeclineChatJoinRequestController as BaseDeclineChatJoinRequestController;
use App\Http\Requests\DeclineChatJoinRequestRequest;
use App\Http\Responses\OpenApi\DeclineChatJoinRequestResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeclineChatJoinRequestController extends BaseDeclineChatJoinRequestController
{
    /**
     * POST /declineChatJoinRequest
     */
    public function declineChatJoinRequest(
        DeclineChatJoinRequestRequest $request,
    ): DeclineChatJoinRequestResponse|ErrorResponse
    {
        // TODO: Implement DeclineChatJoinRequest
        throw new \BadMethodCallException('Not implemented');
    }
}
