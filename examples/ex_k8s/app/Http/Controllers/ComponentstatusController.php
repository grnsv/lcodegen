<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ComponentstatusController as BaseComponentstatusController;
use App\Http\Requests\ListCoreV1ComponentStatusRequest;
use App\Http\Requests\ReadCoreV1ComponentStatusRequest;
use App\Http\Responses\OpenApi\ListCoreV1ComponentStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1ComponentStatusResponse;

final class ComponentstatusController extends BaseComponentstatusController
{
    /**
     * GET /api/v1/componentstatuses
     */
    public function listCoreV1ComponentStatus(
        ListCoreV1ComponentStatusRequest $request,
    ): ListCoreV1ComponentStatusResponse
    {
        // TODO: Implement ListCoreV1ComponentStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/componentstatuses/{name}
     */
    public function readCoreV1ComponentStatus(
        ReadCoreV1ComponentStatusRequest $request,
        string $name,
    ): ReadCoreV1ComponentStatusResponse
    {
        // TODO: Implement ReadCoreV1ComponentStatus
        throw new \BadMethodCallException('Not implemented');
    }
}
