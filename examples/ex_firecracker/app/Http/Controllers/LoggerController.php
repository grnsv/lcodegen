<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LoggerController as BaseLoggerController;
use App\Http\Requests\PutLoggerRequest;
use App\Http\Responses\OpenApi\PutLoggerResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class LoggerController extends BaseLoggerController
{
    /**
     * PUT /logger
     *
     * Initializes the logger by specifying a named pipe or a file for the logs output.
     */
    public function putLogger(
        PutLoggerRequest $request,
    ): PutLoggerResponse|ErrorResponse
    {
        // TODO: Implement PutLogger
        throw new \BadMethodCallException('Not implemented');
    }
}
