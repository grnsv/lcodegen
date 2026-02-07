<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PodtemplateController as BasePodtemplateController;
use App\Http\Requests\ListCoreV1PodTemplateForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1PodTemplateForAllNamespacesResponse;

final class PodtemplateController extends BasePodtemplateController
{
    /**
     * GET /api/v1/podtemplates
     */
    public function listCoreV1PodTemplateForAllNamespaces(
        ListCoreV1PodTemplateForAllNamespacesRequest $request,
    ): ListCoreV1PodTemplateForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1PodTemplateForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
