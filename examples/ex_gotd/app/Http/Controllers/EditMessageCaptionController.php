<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditMessageCaptionController as BaseEditMessageCaptionController;
use App\Http\Requests\EditMessageCaptionRequest;
use App\Http\Responses\OpenApi\EditMessageCaptionResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditMessageCaptionController extends BaseEditMessageCaptionController
{
    /**
     * POST /editMessageCaption
     */
    public function editMessageCaption(
        EditMessageCaptionRequest $request,
    ): EditMessageCaptionResponse|ErrorResponse
    {
        // TODO: Implement EditMessageCaption
        throw new \BadMethodCallException('Not implemented');
    }
}
