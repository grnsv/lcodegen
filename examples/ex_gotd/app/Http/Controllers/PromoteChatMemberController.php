<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PromoteChatMemberController as BasePromoteChatMemberController;
use App\Http\Requests\PromoteChatMemberRequest;
use App\Http\Responses\OpenApi\PromoteChatMemberResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class PromoteChatMemberController extends BasePromoteChatMemberController
{
    /**
     * POST /promoteChatMember
     */
    public function promoteChatMember(
        PromoteChatMemberRequest $request,
    ): PromoteChatMemberResponse|ErrorResponse
    {
        // TODO: Implement PromoteChatMember
        throw new \BadMethodCallException('Not implemented');
    }
}
