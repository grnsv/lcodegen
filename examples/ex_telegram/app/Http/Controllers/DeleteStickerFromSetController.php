<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteStickerFromSetController as BaseDeleteStickerFromSetController;
use App\Http\Requests\DeleteStickerFromSetRequest;
use App\Http\Responses\OpenApi\DeleteStickerFromSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteStickerFromSetController extends BaseDeleteStickerFromSetController
{
    /**
     * POST /deleteStickerFromSet
     */
    public function deleteStickerFromSet(
        DeleteStickerFromSetRequest $request,
    ): DeleteStickerFromSetResponse|ErrorResponse
    {
        // TODO: Implement DeleteStickerFromSet
        throw new \BadMethodCallException('Not implemented');
    }
}
