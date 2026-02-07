<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditMessageMediumController as BaseEditMessageMediumController;
use App\Http\Requests\EditMessageMediaRequest;
use App\Http\Responses\OpenApi\EditMessageMediaResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditMessageMediumController extends BaseEditMessageMediumController
{
    /**
     * POST /editMessageMedia
     */
    public function editMessageMedia(
        EditMessageMediaRequest $request,
    ): EditMessageMediaResponse|ErrorResponse
    {
        // TODO: Implement EditMessageMedia
        throw new \BadMethodCallException('Not implemented');
    }
}
