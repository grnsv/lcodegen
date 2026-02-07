<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendAudioController as BaseSendAudioController;
use App\Http\Requests\SendAudioRequest;
use App\Http\Responses\OpenApi\SendAudioResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendAudioController extends BaseSendAudioController
{
    /**
     * POST /sendAudio
     */
    public function sendAudio(
        SendAudioRequest $request,
    ): SendAudioResponse|ErrorResponse
    {
        // TODO: Implement SendAudio
        throw new \BadMethodCallException('Not implemented');
    }
}
