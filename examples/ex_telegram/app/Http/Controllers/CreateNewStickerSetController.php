<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CreateNewStickerSetController as BaseCreateNewStickerSetController;
use App\Http\Requests\CreateNewStickerSetRequest;
use App\Http\Responses\OpenApi\CreateNewStickerSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class CreateNewStickerSetController extends BaseCreateNewStickerSetController
{
    /**
     * POST /createNewStickerSet
     */
    public function createNewStickerSet(
        CreateNewStickerSetRequest $request,
    ): CreateNewStickerSetResponse|ErrorResponse
    {
        // TODO: Implement CreateNewStickerSet
        throw new \BadMethodCallException('Not implemented');
    }
}
