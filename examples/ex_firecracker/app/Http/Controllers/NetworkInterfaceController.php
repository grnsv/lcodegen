<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NetworkInterfaceController as BaseNetworkInterfaceController;
use App\Http\Requests\PatchGuestNetworkInterfaceByIDRequest;
use App\Http\Requests\PutGuestNetworkInterfaceByIDRequest;
use App\Http\Responses\OpenApi\PatchGuestNetworkInterfaceByIDResponse;
use App\Http\Responses\OpenApi\PutGuestNetworkInterfaceByIDResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class NetworkInterfaceController extends BaseNetworkInterfaceController
{
    /**
     * PATCH /network-interfaces/{iface_id}
     *
     * Updates the rate limiters applied to a network interface. Post-boot only.
     */
    public function patchGuestNetworkInterfaceByID(
        PatchGuestNetworkInterfaceByIDRequest $request,
        string $iface_id,
    ): PatchGuestNetworkInterfaceByIDResponse|ErrorResponse
    {
        // TODO: Implement PatchGuestNetworkInterfaceByID
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /network-interfaces/{iface_id}
     *
     * Creates a network interface. Pre-boot only.
     */
    public function putGuestNetworkInterfaceByID(
        PutGuestNetworkInterfaceByIDRequest $request,
        string $iface_id,
    ): PutGuestNetworkInterfaceByIDResponse|ErrorResponse
    {
        // TODO: Implement PutGuestNetworkInterfaceByID
        throw new \BadMethodCallException('Not implemented');
    }
}
