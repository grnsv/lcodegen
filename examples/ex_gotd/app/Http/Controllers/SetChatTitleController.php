<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatTitleController as BaseSetChatTitleController;
use App\Http\Requests\SetChatTitleRequest;
use App\Http\Responses\OpenApi\SetChatTitleResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatTitleController extends BaseSetChatTitleController
{
    /**
     * POST /setChatTitle
     */
    public function setChatTitle(
        SetChatTitleRequest $request,
    ): SetChatTitleResponse|ErrorResponse
    {
        // TODO: Implement SetChatTitle
        throw new \BadMethodCallException('Not implemented');
    }
}
