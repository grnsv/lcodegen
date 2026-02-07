<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetStickerSetController as BaseGetStickerSetController;
use App\Http\Requests\GetStickerSetRequest;
use App\Http\Responses\OpenApi\GetStickerSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetStickerSetController extends BaseGetStickerSetController
{
    /**
     * POST /getStickerSet
     */
    public function getStickerSet(
        GetStickerSetRequest $request,
    ): GetStickerSetResponse|ErrorResponse
    {
        // TODO: Implement GetStickerSet
        throw new \BadMethodCallException('Not implemented');
    }
}
