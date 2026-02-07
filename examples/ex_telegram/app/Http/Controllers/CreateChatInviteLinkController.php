<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CreateChatInviteLinkController as BaseCreateChatInviteLinkController;
use App\Http\Requests\CreateChatInviteLinkRequest;
use App\Http\Responses\OpenApi\CreateChatInviteLinkResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class CreateChatInviteLinkController extends BaseCreateChatInviteLinkController
{
    /**
     * POST /createChatInviteLink
     */
    public function createChatInviteLink(
        CreateChatInviteLinkRequest $request,
    ): CreateChatInviteLinkResponse|ErrorResponse
    {
        // TODO: Implement CreateChatInviteLink
        throw new \BadMethodCallException('Not implemented');
    }
}
