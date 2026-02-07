<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\RateLimitController as BaseRateLimitController;
use App\Http\Responses\OpenApi\RateLimitGetResponse;

final class RateLimitController extends BaseRateLimitController
{
    /**
     * GET /rate_limit
     *
     * Get rate limit status for the authenticated user
     */
    public function rateLimitGet(
    ): RateLimitGetResponse
    {
        // TODO: Implement RateLimitGet
        throw new \BadMethodCallException('Not implemented');
    }
}
