<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetWebhookInfoController as BaseGetWebhookInfoController;
use App\Http\Responses\OpenApi\GetWebhookInfoResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetWebhookInfoController extends BaseGetWebhookInfoController
{
    /**
     * POST /getWebhookInfo
     */
    public function getWebhookInfo(
    ): GetWebhookInfoResponse|ErrorResponse
    {
        // TODO: Implement GetWebhookInfo
        throw new \BadMethodCallException('Not implemented');
    }
}
