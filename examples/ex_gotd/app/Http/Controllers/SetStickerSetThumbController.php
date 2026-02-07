<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetStickerSetThumbController as BaseSetStickerSetThumbController;
use App\Http\Requests\SetStickerSetThumbRequest;
use App\Http\Responses\OpenApi\SetStickerSetThumbResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetStickerSetThumbController extends BaseSetStickerSetThumbController
{
    /**
     * POST /setStickerSetThumb
     */
    public function setStickerSetThumb(
        SetStickerSetThumbRequest $request,
    ): SetStickerSetThumbResponse|ErrorResponse
    {
        // TODO: Implement SetStickerSetThumb
        throw new \BadMethodCallException('Not implemented');
    }
}
