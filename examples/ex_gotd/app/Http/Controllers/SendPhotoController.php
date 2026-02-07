<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendPhotoController as BaseSendPhotoController;
use App\Http\Requests\SendPhotoRequest;
use App\Http\Responses\OpenApi\SendPhotoResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendPhotoController extends BaseSendPhotoController
{
    /**
     * POST /sendPhoto
     */
    public function sendPhoto(
        SendPhotoRequest $request,
    ): SendPhotoResponse|ErrorResponse
    {
        // TODO: Implement SendPhoto
        throw new \BadMethodCallException('Not implemented');
    }
}
