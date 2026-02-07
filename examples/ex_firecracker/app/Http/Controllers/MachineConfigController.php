<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MachineConfigController as BaseMachineConfigController;
use App\Http\Requests\PatchMachineConfigurationRequest;
use App\Http\Requests\PutMachineConfigurationRequest;
use App\Http\Responses\OpenApi\GetMachineConfigurationResponse;
use App\Http\Responses\OpenApi\PatchMachineConfigurationResponse;
use App\Http\Responses\OpenApi\PutMachineConfigurationResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class MachineConfigController extends BaseMachineConfigController
{
    /**
     * GET /machine-config
     *
     * Gets the machine configuration of the VM.
     */
    public function getMachineConfiguration(
    ): GetMachineConfigurationResponse|ErrorResponse
    {
        // TODO: Implement GetMachineConfiguration
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /machine-config
     *
     * Partially updates the Machine Configuration of the VM. Pre-boot only.
     */
    public function patchMachineConfiguration(
        PatchMachineConfigurationRequest $request,
    ): PatchMachineConfigurationResponse|ErrorResponse
    {
        // TODO: Implement PatchMachineConfiguration
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /machine-config
     *
     * Updates the Machine Configuration of the VM. Pre-boot only.
     */
    public function putMachineConfiguration(
        PutMachineConfigurationRequest $request,
    ): PutMachineConfigurationResponse|ErrorResponse
    {
        // TODO: Implement PutMachineConfiguration
        throw new \BadMethodCallException('Not implemented');
    }
}
