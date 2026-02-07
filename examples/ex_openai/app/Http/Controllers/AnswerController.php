<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerController as BaseAnswerController;
use App\Http\Requests\CreateAnswerRequest;
use App\Http\Responses\OpenApi\CreateAnswerResponse;

final class AnswerController extends BaseAnswerController
{
    /**
     * POST /answers
     *
     * Answers the specified question using the provided documents and examples.

The endpoint first [searches](/docs/api-reference/searches) over provided documents or files to find relevant context. The relevant context is combined with the provided examples and question to create the prompt for [completion](/docs/api-reference/completions).

     */
    public function createAnswer(
        CreateAnswerRequest $request,
    ): CreateAnswerResponse
    {
        // TODO: Implement CreateAnswer
        throw new \BadMethodCallException('Not implemented');
    }
}
