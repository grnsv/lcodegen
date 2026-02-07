<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ExportChatInviteLinkController as BaseExportChatInviteLinkController;
use App\Http\Requests\ExportChatInviteLinkRequest;
use App\Http\Responses\OpenApi\ExportChatInviteLinkResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class ExportChatInviteLinkController extends BaseExportChatInviteLinkController
{
    /**
     * POST /exportChatInviteLink
     */
    public function exportChatInviteLink(
        ExportChatInviteLinkRequest $request,
    ): ExportChatInviteLinkResponse|ErrorResponse
    {
        // TODO: Implement ExportChatInviteLink
        throw new \BadMethodCallException('Not implemented');
    }
}
