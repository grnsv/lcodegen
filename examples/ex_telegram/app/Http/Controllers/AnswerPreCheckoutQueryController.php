<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerPreCheckoutQueryController as BaseAnswerPreCheckoutQueryController;
use App\Http\Requests\AnswerPreCheckoutQueryRequest;
use App\Http\Responses\OpenApi\AnswerPreCheckoutQueryResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AnswerPreCheckoutQueryController extends BaseAnswerPreCheckoutQueryController
{
    /**
     * POST /answerPreCheckoutQuery
     */
    public function answerPreCheckoutQuery(
        AnswerPreCheckoutQueryRequest $request,
    ): AnswerPreCheckoutQueryResponse|ErrorResponse
    {
        // TODO: Implement AnswerPreCheckoutQuery
        throw new \BadMethodCallException('Not implemented');
    }
}
