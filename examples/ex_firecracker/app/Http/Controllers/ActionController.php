<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ActionController as BaseActionController;
use App\Http\Requests\CreateSyncActionRequest;
use App\Http\Responses\OpenApi\CreateSyncActionResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class ActionController extends BaseActionController
{
    /**
     * PUT /actions
     *
     * Creates a synchronous action.
     */
    public function createSyncAction(
        CreateSyncActionRequest $request,
    ): CreateSyncActionResponse|ErrorResponse
    {
        // TODO: Implement CreateSyncAction
        throw new \BadMethodCallException('Not implemented');
    }
}
