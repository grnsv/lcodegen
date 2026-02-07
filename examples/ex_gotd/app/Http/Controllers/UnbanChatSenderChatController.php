<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UnbanChatSenderChatController as BaseUnbanChatSenderChatController;
use App\Http\Requests\UnbanChatSenderChatRequest;
use App\Http\Responses\OpenApi\UnbanChatSenderChatResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class UnbanChatSenderChatController extends BaseUnbanChatSenderChatController
{
    /**
     * POST /unbanChatSenderChat
     */
    public function unbanChatSenderChat(
        UnbanChatSenderChatRequest $request,
    ): UnbanChatSenderChatResponse|ErrorResponse
    {
        // TODO: Implement UnbanChatSenderChat
        throw new \BadMethodCallException('Not implemented');
    }
}
