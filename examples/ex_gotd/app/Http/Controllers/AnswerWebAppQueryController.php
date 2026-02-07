<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerWebAppQueryController as BaseAnswerWebAppQueryController;
use App\Http\Requests\AnswerWebAppQueryRequest;
use App\Http\Responses\OpenApi\AnswerWebAppQueryResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AnswerWebAppQueryController extends BaseAnswerWebAppQueryController
{
    /**
     * POST /answerWebAppQuery
     */
    public function answerWebAppQuery(
        AnswerWebAppQueryRequest $request,
    ): AnswerWebAppQueryResponse|ErrorResponse
    {
        // TODO: Implement AnswerWebAppQuery
        throw new \BadMethodCallException('Not implemented');
    }
}
