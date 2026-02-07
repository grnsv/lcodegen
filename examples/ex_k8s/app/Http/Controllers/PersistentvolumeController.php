<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PersistentvolumeController as BasePersistentvolumeController;
use App\Http\Requests\ListCoreV1PersistentVolumeRequest;
use App\Http\Requests\PatchCoreV1PersistentVolumeRequest;
use App\Http\Requests\PatchCoreV1PersistentVolumeStatusRequest;
use App\Http\Requests\ReadCoreV1PersistentVolumeRequest;
use App\Http\Requests\ReadCoreV1PersistentVolumeStatusRequest;
use App\Http\Responses\OpenApi\ListCoreV1PersistentVolumeResponse;
use App\Http\Responses\OpenApi\PatchCoreV1PersistentVolumeResponse;
use App\Http\Responses\OpenApi\PatchCoreV1PersistentVolumeStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1PersistentVolumeResponse;
use App\Http\Responses\OpenApi\ReadCoreV1PersistentVolumeStatusResponse;

final class PersistentvolumeController extends BasePersistentvolumeController
{
    /**
     * GET /api/v1/persistentvolumes
     */
    public function listCoreV1PersistentVolume(
        ListCoreV1PersistentVolumeRequest $request,
    ): ListCoreV1PersistentVolumeResponse
    {
        // TODO: Implement ListCoreV1PersistentVolume
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/persistentvolumes/{name}
     */
    public function patchCoreV1PersistentVolume(
        PatchCoreV1PersistentVolumeRequest $request,
        string $name,
    ): PatchCoreV1PersistentVolumeResponse
    {
        // TODO: Implement PatchCoreV1PersistentVolume
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/persistentvolumes/{name}/status
     */
    public function patchCoreV1PersistentVolumeStatus(
        PatchCoreV1PersistentVolumeStatusRequest $request,
        string $name,
    ): PatchCoreV1PersistentVolumeStatusResponse
    {
        // TODO: Implement PatchCoreV1PersistentVolumeStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/persistentvolumes/{name}
     */
    public function readCoreV1PersistentVolume(
        ReadCoreV1PersistentVolumeRequest $request,
        string $name,
    ): ReadCoreV1PersistentVolumeResponse
    {
        // TODO: Implement ReadCoreV1PersistentVolume
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/persistentvolumes/{name}/status
     */
    public function readCoreV1PersistentVolumeStatus(
        ReadCoreV1PersistentVolumeStatusRequest $request,
        string $name,
    ): ReadCoreV1PersistentVolumeStatusResponse
    {
        // TODO: Implement ReadCoreV1PersistentVolumeStatus
        throw new \BadMethodCallException('Not implemented');
    }
}
