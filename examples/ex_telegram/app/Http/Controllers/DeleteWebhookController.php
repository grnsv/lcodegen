<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DeleteWebhookController as BaseDeleteWebhookController;
use App\Http\Requests\DeleteWebhookRequest;
use App\Http\Responses\OpenApi\DeleteWebhookResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DeleteWebhookController extends BaseDeleteWebhookController
{
    /**
     * POST /deleteWebhook
     */
    public function deleteWebhook(
        DeleteWebhookRequest $request,
    ): DeleteWebhookResponse|ErrorResponse
    {
        // TODO: Implement DeleteWebhook
        throw new \BadMethodCallException('Not implemented');
    }
}
