<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LicenseController as BaseLicenseController;
use App\Http\Requests\LicensesGetAllCommonlyUsedRequest;
use App\Http\Responses\OpenApi\LicensesGetAllCommonlyUsedResponse;
use App\Http\Responses\OpenApi\LicensesGetResponse;

final class LicenseController extends BaseLicenseController
{
    /**
     * GET /licenses/{license}
     *
     * Get a license
     */
    public function licensesGet(
        string $license,
    ): LicensesGetResponse
    {
        // TODO: Implement LicensesGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /licenses
     *
     * Get all commonly used licenses
     */
    public function licensesGetAllCommonlyUsed(
        LicensesGetAllCommonlyUsedRequest $request,
    ): LicensesGetAllCommonlyUsedResponse
    {
        // TODO: Implement LicensesGetAllCommonlyUsed
        throw new \BadMethodCallException('Not implemented');
    }
}
