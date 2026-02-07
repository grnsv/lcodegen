<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerCallbackQueryController as BaseAnswerCallbackQueryController;
use App\Http\Requests\AnswerCallbackQueryRequest;
use App\Http\Responses\OpenApi\AnswerCallbackQueryResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AnswerCallbackQueryController extends BaseAnswerCallbackQueryController
{
    /**
     * POST /answerCallbackQuery
     */
    public function answerCallbackQuery(
        AnswerCallbackQueryRequest $request,
    ): AnswerCallbackQueryResponse|ErrorResponse
    {
        // TODO: Implement AnswerCallbackQuery
        throw new \BadMethodCallException('Not implemented');
    }
}
