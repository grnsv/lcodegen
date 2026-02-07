<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ResourcequotaController as BaseResourcequotaController;
use App\Http\Requests\ListCoreV1ResourceQuotaForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1ResourceQuotaForAllNamespacesResponse;

final class ResourcequotaController extends BaseResourcequotaController
{
    /**
     * GET /api/v1/resourcequotas
     */
    public function listCoreV1ResourceQuotaForAllNamespaces(
        ListCoreV1ResourceQuotaForAllNamespacesRequest $request,
    ): ListCoreV1ResourceQuotaForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1ResourceQuotaForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
