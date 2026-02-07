<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UnpinChatMessageController as BaseUnpinChatMessageController;
use App\Http\Requests\UnpinChatMessageRequest;
use App\Http\Responses\OpenApi\UnpinChatMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class UnpinChatMessageController extends BaseUnpinChatMessageController
{
    /**
     * POST /unpinChatMessage
     */
    public function unpinChatMessage(
        UnpinChatMessageRequest $request,
    ): UnpinChatMessageResponse|ErrorResponse
    {
        // TODO: Implement UnpinChatMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
