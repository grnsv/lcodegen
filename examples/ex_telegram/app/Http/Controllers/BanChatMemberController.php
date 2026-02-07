<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\BanChatMemberController as BaseBanChatMemberController;
use App\Http\Requests\BanChatMemberRequest;
use App\Http\Responses\OpenApi\BanChatMemberResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class BanChatMemberController extends BaseBanChatMemberController
{
    /**
     * POST /banChatMember
     */
    public function banChatMember(
        BanChatMemberRequest $request,
    ): BanChatMemberResponse|ErrorResponse
    {
        // TODO: Implement BanChatMember
        throw new \BadMethodCallException('Not implemented');
    }
}
