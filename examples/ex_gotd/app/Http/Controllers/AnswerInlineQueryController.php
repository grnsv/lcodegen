<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerInlineQueryController as BaseAnswerInlineQueryController;
use App\Http\Requests\AnswerInlineQueryRequest;
use App\Http\Responses\OpenApi\AnswerInlineQueryResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AnswerInlineQueryController extends BaseAnswerInlineQueryController
{
    /**
     * POST /answerInlineQuery
     */
    public function answerInlineQuery(
        AnswerInlineQueryRequest $request,
    ): AnswerInlineQueryResponse|ErrorResponse
    {
        // TODO: Implement AnswerInlineQuery
        throw new \BadMethodCallException('Not implemented');
    }
}
