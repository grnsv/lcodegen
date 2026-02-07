<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SetMyDefaultAdministratorRightController as BaseSetMyDefaultAdministratorRightController;
use App\Http\Requests\SetMyDefaultAdministratorRightsRequest;
use App\Http\Responses\OpenApi\SetMyDefaultAdministratorRightsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SetMyDefaultAdministratorRightController extends BaseSetMyDefaultAdministratorRightController
{
    /**
     * POST /setMyDefaultAdministratorRights
     */
    public function setMyDefaultAdministratorRights(
        SetMyDefaultAdministratorRightsRequest $request,
    ): SetMyDefaultAdministratorRightsResponse|ErrorResponse
    {
        // TODO: Implement SetMyDefaultAdministratorRights
        throw new \BadMethodCallException('Not implemented');
    }
}
