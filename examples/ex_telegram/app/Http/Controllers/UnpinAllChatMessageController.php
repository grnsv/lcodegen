<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UnpinAllChatMessageController as BaseUnpinAllChatMessageController;
use App\Http\Requests\UnpinAllChatMessagesRequest;
use App\Http\Responses\OpenApi\UnpinAllChatMessagesResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class UnpinAllChatMessageController extends BaseUnpinAllChatMessageController
{
    /**
     * POST /unpinAllChatMessages
     */
    public function unpinAllChatMessages(
        UnpinAllChatMessagesRequest $request,
    ): UnpinAllChatMessagesResponse|ErrorResponse
    {
        // TODO: Implement UnpinAllChatMessages
        throw new \BadMethodCallException('Not implemented');
    }
}
