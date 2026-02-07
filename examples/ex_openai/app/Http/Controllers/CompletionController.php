<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CompletionController as BaseCompletionController;
use App\Http\Requests\CreateCompletionRequest;
use App\Http\Responses\OpenApi\CreateCompletionResponse;

final class CompletionController extends BaseCompletionController
{
    /**
     * POST /completions
     *
     * Creates a completion for the provided prompt and parameters
     */
    public function createCompletion(
        CreateCompletionRequest $request,
    ): CreateCompletionResponse
    {
        // TODO: Implement CreateCompletion
        throw new \BadMethodCallException('Not implemented');
    }
}
