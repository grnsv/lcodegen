<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PinChatMessageController as BasePinChatMessageController;
use App\Http\Requests\PinChatMessageRequest;
use App\Http\Responses\OpenApi\PinChatMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class PinChatMessageController extends BasePinChatMessageController
{
    /**
     * POST /pinChatMessage
     */
    public function pinChatMessage(
        PinChatMessageRequest $request,
    ): PinChatMessageResponse|ErrorResponse
    {
        // TODO: Implement PinChatMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
