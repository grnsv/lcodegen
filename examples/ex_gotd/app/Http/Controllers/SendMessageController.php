<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendMessageController as BaseSendMessageController;
use App\Http\Requests\SendMessageRequest;
use App\Http\Responses\OpenApi\SendMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendMessageController extends BaseSendMessageController
{
    /**
     * POST /sendMessage
     */
    public function sendMessage(
        SendMessageRequest $request,
    ): SendMessageResponse|ErrorResponse
    {
        // TODO: Implement SendMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
