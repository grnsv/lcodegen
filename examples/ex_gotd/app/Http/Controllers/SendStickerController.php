<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendStickerController as BaseSendStickerController;
use App\Http\Requests\SendStickerRequest;
use App\Http\Responses\OpenApi\SendStickerResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendStickerController extends BaseSendStickerController
{
    /**
     * POST /sendSticker
     */
    public function sendSticker(
        SendStickerRequest $request,
    ): SendStickerResponse|ErrorResponse
    {
        // TODO: Implement SendSticker
        throw new \BadMethodCallException('Not implemented');
    }
}
