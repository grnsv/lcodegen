<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetChatStickerSetController as BaseSetChatStickerSetController;
use App\Http\Requests\SetChatStickerSetRequest;
use App\Http\Responses\OpenApi\SetChatStickerSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetChatStickerSetController extends BaseSetChatStickerSetController
{
    /**
     * POST /setChatStickerSet
     */
    public function setChatStickerSet(
        SetChatStickerSetRequest $request,
    ): SetChatStickerSetResponse|ErrorResponse
    {
        // TODO: Implement SetChatStickerSet
        throw new \BadMethodCallException('Not implemented');
    }
}
