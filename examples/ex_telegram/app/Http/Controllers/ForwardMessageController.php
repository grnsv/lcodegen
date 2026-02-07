<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ForwardMessageController as BaseForwardMessageController;
use App\Http\Requests\ForwardMessageRequest;
use App\Http\Responses\OpenApi\ForwardMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class ForwardMessageController extends BaseForwardMessageController
{
    /**
     * POST /forwardMessage
     */
    public function forwardMessage(
        ForwardMessageRequest $request,
    ): ForwardMessageResponse|ErrorResponse
    {
        // TODO: Implement ForwardMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
