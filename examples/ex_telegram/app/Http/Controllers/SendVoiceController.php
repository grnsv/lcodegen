<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendVoiceController as BaseSendVoiceController;
use App\Http\Requests\SendVoiceRequest;
use App\Http\Responses\OpenApi\SendVoiceResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendVoiceController extends BaseSendVoiceController
{
    /**
     * POST /sendVoice
     */
    public function sendVoice(
        SendVoiceRequest $request,
    ): SendVoiceResponse|ErrorResponse
    {
        // TODO: Implement SendVoice
        throw new \BadMethodCallException('Not implemented');
    }
}
