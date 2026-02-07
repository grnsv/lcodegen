<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatAdministratorCustomTitleController as BaseSetChatAdministratorCustomTitleController;
use App\Http\Requests\SetChatAdministratorCustomTitleRequest;
use App\Http\Responses\OpenApi\SetChatAdministratorCustomTitleResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatAdministratorCustomTitleController extends BaseSetChatAdministratorCustomTitleController
{
    /**
     * POST /setChatAdministratorCustomTitle
     */
    public function setChatAdministratorCustomTitle(
        SetChatAdministratorCustomTitleRequest $request,
    ): SetChatAdministratorCustomTitleResponse|ErrorResponse
    {
        // TODO: Implement SetChatAdministratorCustomTitle
        throw new \BadMethodCallException('Not implemented');
    }
}
