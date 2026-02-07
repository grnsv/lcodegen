<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ChatController as BaseChatController;
use App\Http\Requests\CreateChatCompletionRequest;
use App\Http\Responses\OpenApi\CreateChatCompletionResponse;

final class ChatController extends BaseChatController
{
    /**
     * POST /chat/completions
     *
     * Creates a completion for the chat message
     */
    public function createChatCompletion(
        CreateChatCompletionRequest $request,
    ): CreateChatCompletionResponse
    {
        // TODO: Implement CreateChatCompletion
        throw new \BadMethodCallException('Not implemented');
    }
}
