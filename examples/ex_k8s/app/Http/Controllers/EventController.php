<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EventController as BaseEventController;
use App\Http\Requests\ListCoreV1EventForAllNamespacesRequest;
use App\Http\Responses\OpenApi\ListCoreV1EventForAllNamespacesResponse;

final class EventController extends BaseEventController
{
    /**
     * GET /api/v1/events
     */
    public function listCoreV1EventForAllNamespaces(
        ListCoreV1EventForAllNamespacesRequest $request,
    ): ListCoreV1EventForAllNamespacesResponse
    {
        // TODO: Implement ListCoreV1EventForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
