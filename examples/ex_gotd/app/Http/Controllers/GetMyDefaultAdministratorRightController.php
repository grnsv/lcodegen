<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GetMyDefaultAdministratorRightController as BaseGetMyDefaultAdministratorRightController;
use App\Http\Requests\GetMyDefaultAdministratorRightsRequest;
use App\Http\Responses\OpenApi\GetMyDefaultAdministratorRightsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class GetMyDefaultAdministratorRightController extends BaseGetMyDefaultAdministratorRightController
{
    /**
     * POST /getMyDefaultAdministratorRights
     */
    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsRequest $request,
    ): GetMyDefaultAdministratorRightsResponse|ErrorResponse
    {
        // TODO: Implement GetMyDefaultAdministratorRights
        throw new \BadMethodCallException('Not implemented');
    }
}
