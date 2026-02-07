<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendChatActionController as BaseSendChatActionController;
use App\Http\Requests\SendChatActionRequest;
use App\Http\Responses\OpenApi\SendChatActionResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendChatActionController extends BaseSendChatActionController
{
    /**
     * POST /sendChatAction
     */
    public function sendChatAction(
        SendChatActionRequest $request,
    ): SendChatActionResponse|ErrorResponse
    {
        // TODO: Implement SendChatAction
        throw new \BadMethodCallException('Not implemented');
    }
}
