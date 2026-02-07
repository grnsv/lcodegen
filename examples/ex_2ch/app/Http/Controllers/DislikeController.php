<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DislikeController as BaseDislikeController;
use App\Http\Requests\ApiDislikeGetRequest;
use App\Http\Responses\OpenApi\ApiDislikeGetResponse;

final class DislikeController extends BaseDislikeController
{
    /**
     * GET /api/dislike
     *
     * Добавление дизлайка на пост.
     */
    public function apiDislikeGet(
        ApiDislikeGetRequest $request,
    ): ApiDislikeGetResponse
    {
        // TODO: Implement ApiDislikeGet
        throw new \BadMethodCallException('Not implemented');
    }
}
