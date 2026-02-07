<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendVideoController as BaseSendVideoController;
use App\Http\Requests\SendVideoRequest;
use App\Http\Responses\OpenApi\SendVideoResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendVideoController extends BaseSendVideoController
{
    /**
     * POST /sendVideo
     */
    public function sendVideo(
        SendVideoRequest $request,
    ): SendVideoResponse|ErrorResponse
    {
        // TODO: Implement SendVideo
        throw new \BadMethodCallException('Not implemented');
    }
}
