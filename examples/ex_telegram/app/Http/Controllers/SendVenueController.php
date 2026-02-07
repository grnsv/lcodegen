<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendVenueController as BaseSendVenueController;
use App\Http\Requests\SendVenueRequest;
use App\Http\Responses\OpenApi\SendVenueResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendVenueController extends BaseSendVenueController
{
    /**
     * POST /sendVenue
     */
    public function sendVenue(
        SendVenueRequest $request,
    ): SendVenueResponse|ErrorResponse
    {
        // TODO: Implement SendVenue
        throw new \BadMethodCallException('Not implemented');
    }
}
