<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ModerationController as BaseModerationController;
use App\Http\Requests\CreateModerationRequest;
use App\Http\Responses\OpenApi\CreateModerationResponse;

final class ModerationController extends BaseModerationController
{
    /**
     * POST /moderations
     *
     * Classifies if text violates OpenAI's Content Policy
     */
    public function createModeration(
        CreateModerationRequest $request,
    ): CreateModerationResponse
    {
        // TODO: Implement CreateModeration
        throw new \BadMethodCallException('Not implemented');
    }
}
