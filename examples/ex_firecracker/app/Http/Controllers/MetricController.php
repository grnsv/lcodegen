<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MetricController as BaseMetricController;
use App\Http\Requests\PutMetricsRequest;
use App\Http\Responses\OpenApi\PutMetricsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class MetricController extends BaseMetricController
{
    /**
     * PUT /metrics
     *
     * Initializes the metrics system by specifying a named pipe or a file for the metrics output.
     */
    public function putMetrics(
        PutMetricsRequest $request,
    ): PutMetricsResponse|ErrorResponse
    {
        // TODO: Implement PutMetrics
        throw new \BadMethodCallException('Not implemented');
    }
}
