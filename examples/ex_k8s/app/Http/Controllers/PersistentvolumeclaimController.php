<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PersistentvolumeclaimController as BasePersistentvolumeclaimController;
use App\Http\Requests\ListCoreV1PersistentVolumeClaimForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1PersistentVolumeClaimForAllNamespacesResponse;

final class PersistentvolumeclaimController extends BasePersistentvolumeclaimController
{
    /**
     * GET /api/v1/persistentvolumeclaims
     */
    public function listCoreV1PersistentVolumeClaimForAllNamespaces(
        ListCoreV1PersistentVolumeClaimForAllNamespacesRequest $request,
    ): ListCoreV1PersistentVolumeClaimForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1PersistentVolumeClaimForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
