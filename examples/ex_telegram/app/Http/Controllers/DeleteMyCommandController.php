<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteMyCommandController as BaseDeleteMyCommandController;
use App\Http\Requests\DeleteMyCommandsRequest;
use App\Http\Responses\OpenApi\DeleteMyCommandsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteMyCommandController extends BaseDeleteMyCommandController
{
    /**
     * POST /deleteMyCommands
     */
    public function deleteMyCommands(
        DeleteMyCommandsRequest $request,
    ): DeleteMyCommandsResponse|ErrorResponse
    {
        // TODO: Implement DeleteMyCommands
        throw new \BadMethodCallException('Not implemented');
    }
}
