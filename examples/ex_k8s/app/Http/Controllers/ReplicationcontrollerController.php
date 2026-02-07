<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ReplicationcontrollerController as BaseReplicationcontrollerController;
use App\Http\Requests\ListCoreV1ReplicationControllerForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1ReplicationControllerForAllNamespacesResponse;

final class ReplicationcontrollerController extends BaseReplicationcontrollerController
{
    /**
     * GET /api/v1/replicationcontrollers
     */
    public function listCoreV1ReplicationControllerForAllNamespaces(
        ListCoreV1ReplicationControllerForAllNamespacesRequest $request,
    ): ListCoreV1ReplicationControllerForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1ReplicationControllerForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
