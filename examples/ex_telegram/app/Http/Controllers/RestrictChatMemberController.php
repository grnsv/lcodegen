<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\RestrictChatMemberController as BaseRestrictChatMemberController;
use App\Http\Requests\RestrictChatMemberRequest;
use App\Http\Responses\OpenApi\RestrictChatMemberResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class RestrictChatMemberController extends BaseRestrictChatMemberController
{
    /**
     * POST /restrictChatMember
     */
    public function restrictChatMember(
        RestrictChatMemberRequest $request,
    ): RestrictChatMemberResponse|ErrorResponse
    {
        // TODO: Implement RestrictChatMember
        throw new \BadMethodCallException('Not implemented');
    }
}
