<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetMyCommandController as BaseGetMyCommandController;
use App\Http\Requests\GetMyCommandsRequest;
use App\Http\Responses\OpenApi\GetMyCommandsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetMyCommandController extends BaseGetMyCommandController
{
    /**
     * POST /getMyCommands
     */
    public function getMyCommands(
        GetMyCommandsRequest $request,
    ): GetMyCommandsResponse|ErrorResponse
    {
        // TODO: Implement GetMyCommands
        throw new \BadMethodCallException('Not implemented');
    }
}
