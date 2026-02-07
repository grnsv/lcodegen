<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DrifeController as BaseDrifeController;
use App\Http\Requests\PatchGuestDriveByIDRequest;
use App\Http\Requests\PutGuestDriveByIDRequest;
use App\Http\Responses\OpenApi\PatchGuestDriveByIDResponse;
use App\Http\Responses\OpenApi\PutGuestDriveByIDResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DrifeController extends BaseDrifeController
{
    /**
     * PATCH /drives/{drive_id}
     *
     * Updates the properties of a drive. Post-boot only.
     */
    public function patchGuestDriveByID(
        PatchGuestDriveByIDRequest $request,
        string $drive_id,
    ): PatchGuestDriveByIDResponse|ErrorResponse
    {
        // TODO: Implement PatchGuestDriveByID
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /drives/{drive_id}
     *
     * Creates or updates a drive. Pre-boot only.
     */
    public function putGuestDriveByID(
        PutGuestDriveByIDRequest $request,
        string $drive_id,
    ): PutGuestDriveByIDResponse|ErrorResponse
    {
        // TODO: Implement PutGuestDriveByID
        throw new \BadMethodCallException('Not implemented');
    }
}
