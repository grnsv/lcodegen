<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendDocumentController as BaseSendDocumentController;
use App\Http\Requests\SendDocumentRequest;
use App\Http\Responses\OpenApi\SendDocumentResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendDocumentController extends BaseSendDocumentController
{
    /**
     * POST /sendDocument
     */
    public function sendDocument(
        SendDocumentRequest $request,
    ): SendDocumentResponse|ErrorResponse
    {
        // TODO: Implement SendDocument
        throw new \BadMethodCallException('Not implemented');
    }
}
