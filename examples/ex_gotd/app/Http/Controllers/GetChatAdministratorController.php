<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetChatAdministratorController as BaseGetChatAdministratorController;
use App\Http\Requests\GetChatAdministratorsRequest;
use App\Http\Responses\OpenApi\GetChatAdministratorsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetChatAdministratorController extends BaseGetChatAdministratorController
{
    /**
     * POST /getChatAdministrators
     */
    public function getChatAdministrators(
        GetChatAdministratorsRequest $request,
    ): GetChatAdministratorsResponse|ErrorResponse
    {
        // TODO: Implement GetChatAdministrators
        throw new \BadMethodCallException('Not implemented');
    }
}
