<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatMenuButtonController as BaseSetChatMenuButtonController;
use App\Http\Requests\SetChatMenuButtonRequest;
use App\Http\Responses\OpenApi\SetChatMenuButtonResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatMenuButtonController extends BaseSetChatMenuButtonController
{
    /**
     * POST /setChatMenuButton
     */
    public function setChatMenuButton(
        SetChatMenuButtonRequest $request,
    ): SetChatMenuButtonResponse|ErrorResponse
    {
        // TODO: Implement SetChatMenuButton
        throw new \BadMethodCallException('Not implemented');
    }
}
