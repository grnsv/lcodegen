<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetStickerPositionInSetController as BaseSetStickerPositionInSetController;
use App\Http\Requests\SetStickerPositionInSetRequest;
use App\Http\Responses\OpenApi\SetStickerPositionInSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetStickerPositionInSetController extends BaseSetStickerPositionInSetController
{
    /**
     * POST /setStickerPositionInSet
     */
    public function setStickerPositionInSet(
        SetStickerPositionInSetRequest $request,
    ): SetStickerPositionInSetResponse|ErrorResponse
    {
        // TODO: Implement SetStickerPositionInSet
        throw new \BadMethodCallException('Not implemented');
    }
}
