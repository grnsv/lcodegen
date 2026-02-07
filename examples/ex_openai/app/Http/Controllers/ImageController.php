<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ImageController as BaseImageController;
use App\Http\Requests\CreateImageRequest;
use App\Http\Requests\CreateImageEditRequest;
use App\Http\Requests\CreateImageVariationRequest;
use App\Http\Responses\OpenApi\CreateImageEditResponse;
use App\Http\Responses\OpenApi\CreateImageResponse;
use App\Http\Responses\OpenApi\CreateImageVariationResponse;

final class ImageController extends BaseImageController
{
    /**
     * POST /images/generations
     *
     * Creates an image given a prompt.
     */
    public function createImage(
        CreateImageRequest $request,
    ): CreateImageResponse
    {
        // TODO: Implement CreateImage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /images/edits
     *
     * Creates an edited or extended image given an original image and a prompt.
     */
    public function createImageEdit(
        CreateImageEditRequest $request,
    ): CreateImageEditResponse
    {
        // TODO: Implement CreateImageEdit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /images/variations
     *
     * Creates a variation of a given image.
     */
    public function createImageVariation(
        CreateImageVariationRequest $request,
    ): CreateImageVariationResponse
    {
        // TODO: Implement CreateImageVariation
        throw new \BadMethodCallException('Not implemented');
    }
}
