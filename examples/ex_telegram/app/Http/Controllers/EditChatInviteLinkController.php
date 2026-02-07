<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditChatInviteLinkController as BaseEditChatInviteLinkController;
use App\Http\Requests\EditChatInviteLinkRequest;
use App\Http\Responses\OpenApi\EditChatInviteLinkResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditChatInviteLinkController extends BaseEditChatInviteLinkController
{
    /**
     * POST /editChatInviteLink
     */
    public function editChatInviteLink(
        EditChatInviteLinkRequest $request,
    ): EditChatInviteLinkResponse|ErrorResponse
    {
        // TODO: Implement EditChatInviteLink
        throw new \BadMethodCallException('Not implemented');
    }
}
