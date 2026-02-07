<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetChatController as BaseGetChatController;
use App\Http\Requests\GetChatRequest;
use App\Http\Responses\OpenApi\GetChatResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetChatController extends BaseGetChatController
{
    /**
     * POST /getChat
     */
    public function getChat(
        GetChatRequest $request,
    ): GetChatResponse|ErrorResponse
    {
        // TODO: Implement GetChat
        throw new \BadMethodCallException('Not implemented');
    }
}
