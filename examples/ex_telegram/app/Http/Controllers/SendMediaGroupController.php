<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendMediaGroupController as BaseSendMediaGroupController;
use App\Http\Requests\SendMediaGroupRequest;
use App\Http\Responses\OpenApi\SendMediaGroupResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendMediaGroupController extends BaseSendMediaGroupController
{
    /**
     * POST /sendMediaGroup
     */
    public function sendMediaGroup(
        SendMediaGroupRequest $request,
    ): SendMediaGroupResponse|ErrorResponse
    {
        // TODO: Implement SendMediaGroup
        throw new \BadMethodCallException('Not implemented');
    }
}
