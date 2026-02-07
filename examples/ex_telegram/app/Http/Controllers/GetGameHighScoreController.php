<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetGameHighScoreController as BaseGetGameHighScoreController;
use App\Http\Requests\GetGameHighScoresRequest;
use App\Http\Responses\OpenApi\GetGameHighScoresResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetGameHighScoreController extends BaseGetGameHighScoreController
{
    /**
     * POST /getGameHighScores
     */
    public function getGameHighScores(
        GetGameHighScoresRequest $request,
    ): GetGameHighScoresResponse|ErrorResponse
    {
        // TODO: Implement GetGameHighScores
        throw new \BadMethodCallException('Not implemented');
    }
}
