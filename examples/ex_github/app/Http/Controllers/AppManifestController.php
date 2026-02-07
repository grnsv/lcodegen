<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AppManifestController as BaseAppManifestController;
use App\Http\Requests\AppsCreateFromManifestRequest;
use App\Http\Responses\OpenApi\AppsCreateFromManifestResponse;

final class AppManifestController extends BaseAppManifestController
{
    /**
     * POST /app-manifests/{code}/conversions
     *
     * Create a GitHub App from a manifest
     */
    public function appsCreateFromManifest(
        AppsCreateFromManifestRequest $request,
        string $code,
    ): AppsCreateFromManifestResponse
    {
        // TODO: Implement AppsCreateFromManifest
        throw new \BadMethodCallException('Not implemented');
    }
}
