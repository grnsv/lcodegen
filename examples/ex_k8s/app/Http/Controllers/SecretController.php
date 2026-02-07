<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SecretController as BaseSecretController;
use App\Http\Requests\ListCoreV1SecretForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1SecretForAllNamespacesResponse;

final class SecretController extends BaseSecretController
{
    /**
     * GET /api/v1/secrets
     */
    public function listCoreV1SecretForAllNamespaces(
        ListCoreV1SecretForAllNamespacesRequest $request,
    ): ListCoreV1SecretForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1SecretForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
