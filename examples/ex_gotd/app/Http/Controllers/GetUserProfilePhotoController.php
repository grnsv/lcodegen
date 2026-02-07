<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetUserProfilePhotoController as BaseGetUserProfilePhotoController;
use App\Http\Requests\GetUserProfilePhotosRequest;
use App\Http\Responses\OpenApi\GetUserProfilePhotosResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetUserProfilePhotoController extends BaseGetUserProfilePhotoController
{
    /**
     * POST /getUserProfilePhotos
     */
    public function getUserProfilePhotos(
        GetUserProfilePhotosRequest $request,
    ): GetUserProfilePhotosResponse|ErrorResponse
    {
        // TODO: Implement GetUserProfilePhotos
        throw new \BadMethodCallException('Not implemented');
    }
}
