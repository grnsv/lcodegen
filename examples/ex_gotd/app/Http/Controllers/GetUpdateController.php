<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetUpdateController as BaseGetUpdateController;
use App\Http\Requests\GetUpdatesRequest;
use App\Http\Responses\OpenApi\GetUpdatesResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetUpdateController extends BaseGetUpdateController
{
    /**
     * POST /getUpdates
     */
    public function getUpdates(
        GetUpdatesRequest $request,
    ): GetUpdatesResponse|ErrorResponse
    {
        // TODO: Implement GetUpdates
        throw new \BadMethodCallException('Not implemented');
    }
}
