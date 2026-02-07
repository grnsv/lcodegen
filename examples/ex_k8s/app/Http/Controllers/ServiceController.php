<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ServiceController as BaseServiceController;
use App\Http\Requests\ListCoreV1ServiceForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1ServiceForAllNamespacesResponse;

final class ServiceController extends BaseServiceController
{
    /**
     * GET /api/v1/services
     */
    public function listCoreV1ServiceForAllNamespaces(
        ListCoreV1ServiceForAllNamespacesRequest $request,
    ): ListCoreV1ServiceForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1ServiceForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
