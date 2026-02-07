<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\BootSourceController as BaseBootSourceController;
use App\Http\Requests\PutGuestBootSourceRequest;
use App\Http\Responses\OpenApi\PutGuestBootSourceResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class BootSourceController extends BaseBootSourceController
{
    /**
     * PUT /boot-source
     *
     * Creates or updates the boot source. Pre-boot only.
     */
    public function putGuestBootSource(
        PutGuestBootSourceRequest $request,
    ): PutGuestBootSourceResponse|ErrorResponse
    {
        // TODO: Implement PutGuestBootSource
        throw new \BadMethodCallException('Not implemented');
    }
}
