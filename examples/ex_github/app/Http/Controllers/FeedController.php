<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\FeedController as BaseFeedController;
use App\Http\Responses\OpenApi\ActivityGetFeedsResponse;

final class FeedController extends BaseFeedController
{
    /**
     * GET /feeds
     *
     * Get feeds
     */
    public function activityGetFeeds(
    ): ActivityGetFeedsResponse
    {
        // TODO: Implement ActivityGetFeeds
        throw new \BadMethodCallException('Not implemented');
    }
}
