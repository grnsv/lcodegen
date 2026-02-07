<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NetworkController as BaseNetworkController;
use App\Http\Requests\ActivityListPublicEventsForRepoNetworkRequest;
use App\Http\Responses\OpenApi\ActivityListPublicEventsForRepoNetworkResponse;

final class NetworkController extends BaseNetworkController
{
    /**
     * GET /networks/{owner}/{repo}/events
     *
     * List public events for a network of repositories
     */
    public function activityListPublicEventsForRepoNetwork(
        ActivityListPublicEventsForRepoNetworkRequest $request,
        string $owner,
        string $repo,
    ): ActivityListPublicEventsForRepoNetworkResponse
    {
        // TODO: Implement ActivityListPublicEventsForRepoNetwork
        throw new \BadMethodCallException('Not implemented');
    }
}
