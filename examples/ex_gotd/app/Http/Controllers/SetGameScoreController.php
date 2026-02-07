<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetGameScoreController as BaseSetGameScoreController;
use App\Http\Requests\SetGameScoreRequest;
use App\Http\Responses\OpenApi\SetGameScoreResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetGameScoreController extends BaseSetGameScoreController
{
    /**
     * POST /setGameScore
     */
    public function setGameScore(
        SetGameScoreRequest $request,
    ): SetGameScoreResponse|ErrorResponse
    {
        // TODO: Implement SetGameScore
        throw new \BadMethodCallException('Not implemented');
    }
}
