<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SnapshotController as BaseSnapshotController;
use App\Http\Requests\CreateSnapshotRequest;
use App\Http\Requests\LoadSnapshotRequest;
use App\Http\Responses\OpenApi\CreateSnapshotResponse;
use App\Http\Responses\OpenApi\LoadSnapshotResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SnapshotController extends BaseSnapshotController
{
    /**
     * PUT /snapshot/create
     *
     * Creates a full or diff snapshot. Post-boot only.
     */
    public function createSnapshot(
        CreateSnapshotRequest $request,
    ): CreateSnapshotResponse|ErrorResponse
    {
        // TODO: Implement CreateSnapshot
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /snapshot/load
     *
     * Loads a snapshot. Pre-boot only.
     */
    public function loadSnapshot(
        LoadSnapshotRequest $request,
    ): LoadSnapshotResponse|ErrorResponse
    {
        // TODO: Implement LoadSnapshot
        throw new \BadMethodCallException('Not implemented');
    }
}
