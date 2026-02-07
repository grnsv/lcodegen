<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetChatMenuButtonController as BaseGetChatMenuButtonController;
use App\Http\Requests\GetChatMenuButtonRequest;
use App\Http\Responses\OpenApi\GetChatMenuButtonResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetChatMenuButtonController extends BaseGetChatMenuButtonController
{
    /**
     * POST /getChatMenuButton
     */
    public function getChatMenuButton(
        GetChatMenuButtonRequest $request,
    ): GetChatMenuButtonResponse|ErrorResponse
    {
        // TODO: Implement GetChatMenuButton
        throw new \BadMethodCallException('Not implemented');
    }
}
