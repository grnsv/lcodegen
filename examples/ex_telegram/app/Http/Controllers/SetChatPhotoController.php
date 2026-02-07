<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatPhotoController as BaseSetChatPhotoController;
use App\Http\Requests\SetChatPhotoRequest;
use App\Http\Responses\OpenApi\SetChatPhotoResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatPhotoController extends BaseSetChatPhotoController
{
    /**
     * POST /setChatPhoto
     */
    public function setChatPhoto(
        SetChatPhotoRequest $request,
    ): SetChatPhotoResponse|ErrorResponse
    {
        // TODO: Implement SetChatPhoto
        throw new \BadMethodCallException('Not implemented');
    }
}
