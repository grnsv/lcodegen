<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DefaultController as BaseDefaultController;
use App\Http\Responses\OpenApi\GetCoreAPIVersionsResponse;
use App\Http\Responses\OpenApi\GetCoreV1APIResourcesResponse;

final class DefaultController extends BaseDefaultController
{
    /**
     * GET /api/
     */
    public function getCoreAPIVersions(
    ): GetCoreAPIVersionsResponse
    {
        // TODO: Implement GetCoreAPIVersions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/
     */
    public function getCoreV1APIResources(
    ): GetCoreV1APIResourcesResponse
    {
        // TODO: Implement GetCoreV1APIResources
        throw new \BadMethodCallException('Not implemented');
    }
}
