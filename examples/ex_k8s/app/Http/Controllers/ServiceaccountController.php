<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ServiceaccountController as BaseServiceaccountController;
use App\Http\Requests\ListCoreV1ServiceAccountForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1ServiceAccountForAllNamespacesResponse;

final class ServiceaccountController extends BaseServiceaccountController
{
    /**
     * GET /api/v1/serviceaccounts
     */
    public function listCoreV1ServiceAccountForAllNamespaces(
        ListCoreV1ServiceAccountForAllNamespacesRequest $request,
    ): ListCoreV1ServiceAccountForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1ServiceAccountForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
