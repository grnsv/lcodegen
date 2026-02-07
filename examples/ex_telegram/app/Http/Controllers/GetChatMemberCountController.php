<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetChatMemberCountController as BaseGetChatMemberCountController;
use App\Http\Requests\GetChatMemberCountRequest;
use App\Http\Responses\OpenApi\GetChatMemberCountResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetChatMemberCountController extends BaseGetChatMemberCountController
{
    /**
     * POST /getChatMemberCount
     */
    public function getChatMemberCount(
        GetChatMemberCountRequest $request,
    ): GetChatMemberCountResponse|ErrorResponse
    {
        // TODO: Implement GetChatMemberCount
        throw new \BadMethodCallException('Not implemented');
    }
}
