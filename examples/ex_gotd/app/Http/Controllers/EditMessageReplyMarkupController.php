<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditMessageReplyMarkupController as BaseEditMessageReplyMarkupController;
use App\Http\Requests\EditMessageReplyMarkupRequest;
use App\Http\Responses\OpenApi\EditMessageReplyMarkupResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditMessageReplyMarkupController extends BaseEditMessageReplyMarkupController
{
    /**
     * POST /editMessageReplyMarkup
     */
    public function editMessageReplyMarkup(
        EditMessageReplyMarkupRequest $request,
    ): EditMessageReplyMarkupResponse|ErrorResponse
    {
        // TODO: Implement EditMessageReplyMarkup
        throw new \BadMethodCallException('Not implemented');
    }
}
