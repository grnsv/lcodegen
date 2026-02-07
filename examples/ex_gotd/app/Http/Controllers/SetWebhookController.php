<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetWebhookController as BaseSetWebhookController;
use App\Http\Requests\SetWebhookRequest;
use App\Http\Responses\OpenApi\SetWebhookResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetWebhookController extends BaseSetWebhookController
{
    /**
     * POST /setWebhook
     */
    public function setWebhook(
        SetWebhookRequest $request,
    ): SetWebhookResponse|ErrorResponse
    {
        // TODO: Implement SetWebhook
        throw new \BadMethodCallException('Not implemented');
    }
}
