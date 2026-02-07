<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetMeController as BaseGetMeController;
use App\Http\Responses\OpenApi\GetMeResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetMeController extends BaseGetMeController
{
    /**
     * POST /getMe
     */
    public function getMe(
    ): GetMeResponse|ErrorResponse
    {
        // TODO: Implement GetMe
        throw new \BadMethodCallException('Not implemented');
    }
}
