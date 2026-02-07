<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendDiceController as BaseSendDiceController;
use App\Http\Requests\SendDiceRequest;
use App\Http\Responses\OpenApi\SendDiceResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendDiceController extends BaseSendDiceController
{
    /**
     * POST /sendDice
     */
    public function sendDice(
        SendDiceRequest $request,
    ): SendDiceResponse|ErrorResponse
    {
        // TODO: Implement SendDice
        throw new \BadMethodCallException('Not implemented');
    }
}
