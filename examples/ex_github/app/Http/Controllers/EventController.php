<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EventController as BaseEventController;
use App\Http\Requests\ActivityListPublicEventsRequest;
use App\Http\Responses\OpenApi\ActivityListPublicEventsResponse;

final class EventController extends BaseEventController
{
    /**
     * GET /events
     *
     * List public events
     */
    public function activityListPublicEvents(
        ActivityListPublicEventsRequest $request,
    ): ActivityListPublicEventsResponse
    {
        // TODO: Implement ActivityListPublicEvents
        throw new \BadMethodCallException('Not implemented');
    }
}
