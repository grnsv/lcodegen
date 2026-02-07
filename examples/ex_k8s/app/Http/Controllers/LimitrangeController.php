<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LimitrangeController as BaseLimitrangeController;
use App\Http\Requests\ListCoreV1LimitRangeForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1LimitRangeForAllNamespacesResponse;

final class LimitrangeController extends BaseLimitrangeController
{
    /**
     * GET /api/v1/limitranges
     */
    public function listCoreV1LimitRangeForAllNamespaces(
        ListCoreV1LimitRangeForAllNamespacesRequest $request,
    ): ListCoreV1LimitRangeForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1LimitRangeForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
