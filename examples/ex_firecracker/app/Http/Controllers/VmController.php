<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\VmController as BaseVmController;
use App\Http\Requests\PatchVmRequest;
use App\Http\Responses\OpenApi\GetExportVmConfigResponse;
use App\Http\Responses\OpenApi\PatchVmResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class VmController extends BaseVmController
{
    /**
     * GET /vm/config
     *
     * Gets the full VM configuration.
     */
    public function getExportVmConfig(
    ): GetExportVmConfigResponse|ErrorResponse
    {
        // TODO: Implement GetExportVmConfig
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /vm
     *
     * Updates the microVM state.
     */
    public function patchVm(
        PatchVmRequest $request,
    ): PatchVmResponse|ErrorResponse
    {
        // TODO: Implement PatchVm
        throw new \BadMethodCallException('Not implemented');
    }
}
