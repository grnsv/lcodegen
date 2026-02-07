<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\VsockController as BaseVsockController;
use App\Http\Requests\PutGuestVsockRequest;
use App\Http\Responses\OpenApi\PutGuestVsockResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class VsockController extends BaseVsockController
{
    /**
     * PUT /vsock
     *
     * Creates/updates a vsock device. Pre-boot only.
     */
    public function putGuestVsock(
        PutGuestVsockRequest $request,
    ): PutGuestVsockResponse|ErrorResponse
    {
        // TODO: Implement PutGuestVsock
        throw new \BadMethodCallException('Not implemented');
    }
}
