<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendGameController as BaseSendGameController;
use App\Http\Requests\SendGameRequest;
use App\Http\Responses\OpenApi\SendGameResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendGameController extends BaseSendGameController
{
    /**
     * POST /sendGame
     */
    public function sendGame(
        SendGameRequest $request,
    ): SendGameResponse|ErrorResponse
    {
        // TODO: Implement SendGame
        throw new \BadMethodCallException('Not implemented');
    }
}
