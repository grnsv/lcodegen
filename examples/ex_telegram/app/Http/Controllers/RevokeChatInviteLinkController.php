<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\RevokeChatInviteLinkController as BaseRevokeChatInviteLinkController;
use App\Http\Requests\RevokeChatInviteLinkRequest;
use App\Http\Responses\OpenApi\RevokeChatInviteLinkResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class RevokeChatInviteLinkController extends BaseRevokeChatInviteLinkController
{
    /**
     * POST /revokeChatInviteLink
     */
    public function revokeChatInviteLink(
        RevokeChatInviteLinkRequest $request,
    ): RevokeChatInviteLinkResponse|ErrorResponse
    {
        // TODO: Implement RevokeChatInviteLink
        throw new \BadMethodCallException('Not implemented');
    }
}
