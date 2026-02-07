<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UnbanChatMemberController as BaseUnbanChatMemberController;
use App\Http\Requests\UnbanChatMemberRequest;
use App\Http\Responses\OpenApi\UnbanChatMemberResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class UnbanChatMemberController extends BaseUnbanChatMemberController
{
    /**
     * POST /unbanChatMember
     */
    public function unbanChatMember(
        UnbanChatMemberRequest $request,
    ): UnbanChatMemberResponse|ErrorResponse
    {
        // TODO: Implement UnbanChatMember
        throw new \BadMethodCallException('Not implemented');
    }
}
