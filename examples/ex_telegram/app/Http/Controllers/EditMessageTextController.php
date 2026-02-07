<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditMessageTextController as BaseEditMessageTextController;
use App\Http\Requests\EditMessageTextRequest;
use App\Http\Responses\OpenApi\EditMessageTextResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditMessageTextController extends BaseEditMessageTextController
{
    /**
     * POST /editMessageText
     */
    public function editMessageText(
        EditMessageTextRequest $request,
    ): EditMessageTextResponse|ErrorResponse
    {
        // TODO: Implement EditMessageText
        throw new \BadMethodCallException('Not implemented');
    }
}
