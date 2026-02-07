<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AnswerShippingQueryController as BaseAnswerShippingQueryController;
use App\Http\Requests\AnswerShippingQueryRequest;
use App\Http\Responses\OpenApi\AnswerShippingQueryResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class AnswerShippingQueryController extends BaseAnswerShippingQueryController
{
    /**
     * POST /answerShippingQuery
     */
    public function answerShippingQuery(
        AnswerShippingQueryRequest $request,
    ): AnswerShippingQueryResponse|ErrorResponse
    {
        // TODO: Implement AnswerShippingQuery
        throw new \BadMethodCallException('Not implemented');
    }
}
