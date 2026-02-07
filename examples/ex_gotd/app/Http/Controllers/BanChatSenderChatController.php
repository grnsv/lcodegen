<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\BanChatSenderChatController as BaseBanChatSenderChatController;
use App\Http\Requests\BanChatSenderChatRequest;
use App\Http\Responses\OpenApi\BanChatSenderChatResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class BanChatSenderChatController extends BaseBanChatSenderChatController
{
    /**
     * POST /banChatSenderChat
     */
    public function banChatSenderChat(
        BanChatSenderChatRequest $request,
    ): BanChatSenderChatResponse|ErrorResponse
    {
        // TODO: Implement BanChatSenderChat
        throw new \BadMethodCallException('Not implemented');
    }
}
