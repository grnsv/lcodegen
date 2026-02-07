<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatDescriptionController as BaseSetChatDescriptionController;
use App\Http\Requests\SetChatDescriptionRequest;
use App\Http\Responses\OpenApi\SetChatDescriptionResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatDescriptionController extends BaseSetChatDescriptionController
{
    /**
     * POST /setChatDescription
     */
    public function setChatDescription(
        SetChatDescriptionRequest $request,
    ): SetChatDescriptionResponse|ErrorResponse
    {
        // TODO: Implement SetChatDescription
        throw new \BadMethodCallException('Not implemented');
    }
}
