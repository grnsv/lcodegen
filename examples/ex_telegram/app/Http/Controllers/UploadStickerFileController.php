<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UploadStickerFileController as BaseUploadStickerFileController;
use App\Http\Requests\UploadStickerFileRequest;
use App\Http\Responses\OpenApi\UploadStickerFileResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class UploadStickerFileController extends BaseUploadStickerFileController
{
    /**
     * POST /uploadStickerFile
     */
    public function uploadStickerFile(
        UploadStickerFileRequest $request,
    ): UploadStickerFileResponse|ErrorResponse
    {
        // TODO: Implement UploadStickerFile
        throw new \BadMethodCallException('Not implemented');
    }
}
