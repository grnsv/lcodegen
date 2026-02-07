<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetMyCommandController as BaseSetMyCommandController;
use App\Http\Requests\SetMyCommandsRequest;
use App\Http\Responses\OpenApi\SetMyCommandsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetMyCommandController extends BaseSetMyCommandController
{
    /**
     * POST /setMyCommands
     */
    public function setMyCommands(
        SetMyCommandsRequest $request,
    ): SetMyCommandsResponse|ErrorResponse
    {
        // TODO: Implement SetMyCommands
        throw new \BadMethodCallException('Not implemented');
    }
}
