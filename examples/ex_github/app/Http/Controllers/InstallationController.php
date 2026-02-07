<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\InstallationController as BaseInstallationController;
use App\Http\Requests\AppsListReposAccessibleToInstallationRequest;
use App\Http\Responses\OpenApi\AppsListReposAccessibleToInstallationResponse;
use App\Http\Responses\OpenApi\AppsRevokeInstallationAccessTokenResponse;

final class InstallationController extends BaseInstallationController
{
    /**
     * GET /installation/repositories
     *
     * List repositories accessible to the app installation
     */
    public function appsListReposAccessibleToInstallation(
        AppsListReposAccessibleToInstallationRequest $request,
    ): AppsListReposAccessibleToInstallationResponse
    {
        // TODO: Implement AppsListReposAccessibleToInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /installation/token
     *
     * Revoke an installation access token
     */
    public function appsRevokeInstallationAccessToken(
    ): AppsRevokeInstallationAccessTokenResponse
    {
        // TODO: Implement AppsRevokeInstallationAccessToken
        throw new \BadMethodCallException('Not implemented');
    }
}
