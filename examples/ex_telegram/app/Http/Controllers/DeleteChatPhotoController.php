<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteChatPhotoController as BaseDeleteChatPhotoController;
use App\Http\Requests\DeleteChatPhotoRequest;
use App\Http\Responses\OpenApi\DeleteChatPhotoResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteChatPhotoController extends BaseDeleteChatPhotoController
{
    /**
     * POST /deleteChatPhoto
     */
    public function deleteChatPhoto(
        DeleteChatPhotoRequest $request,
    ): DeleteChatPhotoResponse|ErrorResponse
    {
        // TODO: Implement DeleteChatPhoto
        throw new \BadMethodCallException('Not implemented');
    }
}
