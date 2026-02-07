<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\WellKnownController as BaseWellKnownController;
use App\Http\Responses\OpenApi\GetServiceAccountIssuerOpenIDConfigurationResponse;

final class WellKnownController extends BaseWellKnownController
{
    /**
     * GET /.well-known/openid-configuration/
     */
    public function getServiceAccountIssuerOpenIDConfiguration(
    ): GetServiceAccountIssuerOpenIDConfigurationResponse
    {
        // TODO: Implement GetServiceAccountIssuerOpenIDConfiguration
        throw new \BadMethodCallException('Not implemented');
    }
}
