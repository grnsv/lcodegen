<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OpenidController as BaseOpenidController;
use App\Http\Responses\OpenApi\GetServiceAccountIssuerOpenIDKeysetResponse;

final class OpenidController extends BaseOpenidController
{
    /**
     * GET /openid/v1/jwks/
     */
    public function getServiceAccountIssuerOpenIDKeyset(
    ): GetServiceAccountIssuerOpenIDKeysetResponse
    {
        // TODO: Implement GetServiceAccountIssuerOpenIDKeyset
        throw new \BadMethodCallException('Not implemented');
    }
}
