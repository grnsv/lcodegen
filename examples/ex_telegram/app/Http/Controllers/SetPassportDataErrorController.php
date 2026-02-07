<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetPassportDataErrorController as BaseSetPassportDataErrorController;
use App\Http\Requests\SetPassportDataErrorsRequest;
use App\Http\Responses\OpenApi\SetPassportDataErrorsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetPassportDataErrorController extends BaseSetPassportDataErrorController
{
    /**
     * POST /setPassportDataErrors
     */
    public function setPassportDataErrors(
        SetPassportDataErrorsRequest $request,
    ): SetPassportDataErrorsResponse|ErrorResponse
    {
        // TODO: Implement SetPassportDataErrors
        throw new \BadMethodCallException('Not implemented');
    }
}
