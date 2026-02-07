<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendAnimationController as BaseSendAnimationController;
use App\Http\Requests\SendAnimationRequest;
use App\Http\Responses\OpenApi\SendAnimationResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendAnimationController extends BaseSendAnimationController
{
    /**
     * POST /sendAnimation
     */
    public function sendAnimation(
        SendAnimationRequest $request,
    ): SendAnimationResponse|ErrorResponse
    {
        // TODO: Implement SendAnimation
        throw new \BadMethodCallException('Not implemented');
    }
}
