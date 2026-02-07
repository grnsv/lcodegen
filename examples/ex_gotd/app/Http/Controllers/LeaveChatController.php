<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LeaveChatController as BaseLeaveChatController;
use App\Http\Requests\LeaveChatRequest;
use App\Http\Responses\OpenApi\LeaveChatResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class LeaveChatController extends BaseLeaveChatController
{
    /**
     * POST /leaveChat
     */
    public function leaveChat(
        LeaveChatRequest $request,
    ): LeaveChatResponse|ErrorResponse
    {
        // TODO: Implement LeaveChat
        throw new \BadMethodCallException('Not implemented');
    }
}
