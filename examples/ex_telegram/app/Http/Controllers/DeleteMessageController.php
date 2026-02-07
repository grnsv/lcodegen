<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteMessageController as BaseDeleteMessageController;
use App\Http\Requests\DeleteMessageRequest;
use App\Http\Responses\OpenApi\DeleteMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteMessageController extends BaseDeleteMessageController
{
    /**
     * POST /deleteMessage
     */
    public function deleteMessage(
        DeleteMessageRequest $request,
    ): DeleteMessageResponse|ErrorResponse
    {
        // TODO: Implement DeleteMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
