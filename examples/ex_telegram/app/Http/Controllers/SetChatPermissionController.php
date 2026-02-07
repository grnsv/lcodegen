<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatPermissionController as BaseSetChatPermissionController;
use App\Http\Requests\SetChatPermissionsRequest;
use App\Http\Responses\OpenApi\SetChatPermissionsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatPermissionController extends BaseSetChatPermissionController
{
    /**
     * POST /setChatPermissions
     */
    public function setChatPermissions(
        SetChatPermissionsRequest $request,
    ): SetChatPermissionsResponse|ErrorResponse
    {
        // TODO: Implement SetChatPermissions
        throw new \BadMethodCallException('Not implemented');
    }
}
