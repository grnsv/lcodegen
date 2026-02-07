<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LikeController as BaseLikeController;
use App\Http\Requests\ApiLikeGetRequest;
use App\Http\Responses\OpenApi\ApiLikeGetResponse;

final class LikeController extends BaseLikeController
{
    /**
     * GET /api/like
     *
     * Добавление лайка на пост.
     */
    public function apiLikeGet(
        ApiLikeGetRequest $request,
    ): ApiLikeGetResponse
    {
        // TODO: Implement ApiLikeGet
        throw new \BadMethodCallException('Not implemented');
    }
}
