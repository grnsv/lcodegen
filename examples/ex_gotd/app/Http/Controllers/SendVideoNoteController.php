<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendVideoNoteController as BaseSendVideoNoteController;
use App\Http\Requests\SendVideoNoteRequest;
use App\Http\Responses\OpenApi\SendVideoNoteResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendVideoNoteController extends BaseSendVideoNoteController
{
    /**
     * POST /sendVideoNote
     */
    public function sendVideoNote(
        SendVideoNoteRequest $request,
    ): SendVideoNoteResponse|ErrorResponse
    {
        // TODO: Implement SendVideoNote
        throw new \BadMethodCallException('Not implemented');
    }
}
