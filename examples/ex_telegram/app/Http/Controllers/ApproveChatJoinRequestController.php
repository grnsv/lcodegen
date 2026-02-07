<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ApproveChatJoinRequestController as BaseApproveChatJoinRequestController;
use App\Http\Requests\ApproveChatJoinRequestRequest;
use App\Http\Responses\OpenApi\ApproveChatJoinRequestResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class ApproveChatJoinRequestController extends BaseApproveChatJoinRequestController
{
    /**
     * POST /approveChatJoinRequest
     */
    public function approveChatJoinRequest(
        ApproveChatJoinRequestRequest $request,
    ): ApproveChatJoinRequestResponse|ErrorResponse
    {
        // TODO: Implement ApproveChatJoinRequest
        throw new \BadMethodCallException('Not implemented');
    }
}
