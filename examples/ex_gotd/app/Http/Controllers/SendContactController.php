<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendContactController as BaseSendContactController;
use App\Http\Requests\SendContactRequest;
use App\Http\Responses\OpenApi\SendContactResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendContactController extends BaseSendContactController
{
    /**
     * POST /sendContact
     */
    public function sendContact(
        SendContactRequest $request,
    ): SendContactResponse|ErrorResponse
    {
        // TODO: Implement SendContact
        throw new \BadMethodCallException('Not implemented');
    }
}
