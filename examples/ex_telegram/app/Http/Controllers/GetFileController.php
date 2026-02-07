<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetFileController as BaseGetFileController;
use App\Http\Requests\GetFileRequest;
use App\Http\Responses\OpenApi\GetFileResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetFileController extends BaseGetFileController
{
    /**
     * POST /getFile
     */
    public function getFile(
        GetFileRequest $request,
    ): GetFileResponse|ErrorResponse
    {
        // TODO: Implement GetFile
        throw new \BadMethodCallException('Not implemented');
    }
}
