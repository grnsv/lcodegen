<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ConfigmapController as BaseConfigmapController;
use App\Http\Requests\ListCoreV1ConfigMapForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1ConfigMapForAllNamespacesResponse;

final class ConfigmapController extends BaseConfigmapController
{
    /**
     * GET /api/v1/configmaps
     */
    public function listCoreV1ConfigMapForAllNamespaces(
        ListCoreV1ConfigMapForAllNamespacesRequest $request,
    ): ListCoreV1ConfigMapForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1ConfigMapForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
