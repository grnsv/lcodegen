<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CloseController as BaseCloseController;
use App\Http\Responses\OpenApi\CloseResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class CloseController extends BaseCloseController
{
    /**
     * POST /close
     */
    public function close(
    ): CloseResponse|ErrorResponse
    {
        // TODO: Implement Close
        throw new \BadMethodCallException('Not implemented');
    }
}
