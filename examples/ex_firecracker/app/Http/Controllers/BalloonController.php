<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\BalloonController as BaseBalloonController;
use App\Http\Requests\PatchBalloonRequest;
use App\Http\Requests\PatchBalloonStatsIntervalRequest;
use App\Http\Requests\PutBalloonRequest;
use App\Http\Responses\OpenApi\DescribeBalloonConfigResponse;
use App\Http\Responses\OpenApi\DescribeBalloonStatsResponse;
use App\Http\Responses\OpenApi\PatchBalloonResponse;
use App\Http\Responses\OpenApi\PatchBalloonStatsIntervalResponse;
use App\Http\Responses\OpenApi\PutBalloonResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class BalloonController extends BaseBalloonController
{
    /**
     * GET /balloon
     *
     * Returns the current balloon device configuration.
     */
    public function describeBalloonConfig(
    ): DescribeBalloonConfigResponse|ErrorResponse
    {
        // TODO: Implement DescribeBalloonConfig
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /balloon/statistics
     *
     * Returns the latest balloon device statistics, only if enabled pre-boot.
     */
    public function describeBalloonStats(
    ): DescribeBalloonStatsResponse|ErrorResponse
    {
        // TODO: Implement DescribeBalloonStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /balloon
     *
     * Updates a balloon device.
     */
    public function patchBalloon(
        PatchBalloonRequest $request,
    ): PatchBalloonResponse|ErrorResponse
    {
        // TODO: Implement PatchBalloon
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /balloon/statistics
     *
     * Updates a balloon device statistics polling interval.
     */
    public function patchBalloonStatsInterval(
        PatchBalloonStatsIntervalRequest $request,
    ): PatchBalloonStatsIntervalResponse|ErrorResponse
    {
        // TODO: Implement PatchBalloonStatsInterval
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /balloon
     *
     * Creates or updates a balloon device.
     */
    public function putBalloon(
        PutBalloonRequest $request,
    ): PutBalloonResponse|ErrorResponse
    {
        // TODO: Implement PutBalloon
        throw new \BadMethodCallException('Not implemented');
    }
}
