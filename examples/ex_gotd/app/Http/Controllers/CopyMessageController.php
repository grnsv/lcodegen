<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CopyMessageController as BaseCopyMessageController;
use App\Http\Requests\CopyMessageRequest;
use App\Http\Responses\OpenApi\CopyMessageResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class CopyMessageController extends BaseCopyMessageController
{
    /**
     * POST /copyMessage
     */
    public function copyMessage(
        CopyMessageRequest $request,
    ): CopyMessageResponse|ErrorResponse
    {
        // TODO: Implement CopyMessage
        throw new \BadMethodCallException('Not implemented');
    }
}
