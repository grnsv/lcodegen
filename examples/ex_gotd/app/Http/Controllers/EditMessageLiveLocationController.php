<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditMessageLiveLocationController as BaseEditMessageLiveLocationController;
use App\Http\Requests\EditMessageLiveLocationRequest;
use App\Http\Responses\OpenApi\EditMessageLiveLocationResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class EditMessageLiveLocationController extends BaseEditMessageLiveLocationController
{
    /**
     * POST /editMessageLiveLocation
     */
    public function editMessageLiveLocation(
        EditMessageLiveLocationRequest $request,
    ): EditMessageLiveLocationResponse|ErrorResponse
    {
        // TODO: Implement EditMessageLiveLocation
        throw new \BadMethodCallException('Not implemented');
    }
}
