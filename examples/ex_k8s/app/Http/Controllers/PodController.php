<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PodController as BasePodController;
use App\Http\Requests\ListCoreV1PodForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1PodForAllNamespacesResponse;

final class PodController extends BasePodController
{
    /**
     * GET /api/v1/pods
     */
    public function listCoreV1PodForAllNamespaces(
        ListCoreV1PodForAllNamespacesRequest $request,
    ): ListCoreV1PodForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1PodForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
