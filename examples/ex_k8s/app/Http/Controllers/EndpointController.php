<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EndpointController as BaseEndpointController;
use App\Http\Requests\ListCoreV1EndpointsForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1EndpointsForAllNamespacesResponse;

final class EndpointController extends BaseEndpointController
{
    /**
     * GET /api/v1/endpoints
     */
    public function listCoreV1EndpointsForAllNamespaces(
        ListCoreV1EndpointsForAllNamespacesRequest $request,
    ): ListCoreV1EndpointsForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1EndpointsForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
