<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AddStickerToSetController as BaseAddStickerToSetController;
use App\Http\Requests\AddStickerToSetRequest;
use App\Http\Responses\OpenApi\AddStickerToSetResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AddStickerToSetController extends BaseAddStickerToSetController
{
    /**
     * POST /addStickerToSet
     */
    public function addStickerToSet(
        AddStickerToSetRequest $request,
    ): AddStickerToSetResponse|ErrorResponse
    {
        // TODO: Implement AddStickerToSet
        throw new \BadMethodCallException('Not implemented');
    }
}
