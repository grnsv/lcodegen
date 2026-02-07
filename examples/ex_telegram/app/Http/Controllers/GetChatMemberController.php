<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetChatMemberController as BaseGetChatMemberController;
use App\Http\Requests\GetChatMemberRequest;
use App\Http\Responses\OpenApi\GetChatMemberResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetChatMemberController extends BaseGetChatMemberController
{
    /**
     * POST /getChatMember
     */
    public function getChatMember(
        GetChatMemberRequest $request,
    ): GetChatMemberResponse|ErrorResponse
    {
        // TODO: Implement GetChatMember
        throw new \BadMethodCallException('Not implemented');
    }
}
