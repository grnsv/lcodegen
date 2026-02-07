<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteChatStickerSetController as BaseDeleteChatStickerSetController;
use App\Http\Requests\DeleteChatStickerSetRequest;
use App\Http\Responses\OpenApi\DeleteChatStickerSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteChatStickerSetController extends BaseDeleteChatStickerSetController
{
    /**
     * POST /deleteChatStickerSet
     */
    public function deleteChatStickerSet(
        DeleteChatStickerSetRequest $request,
    ): DeleteChatStickerSetResponse|ErrorResponse
    {
        // TODO: Implement DeleteChatStickerSet
        throw new \BadMethodCallException('Not implemented');
    }
}
