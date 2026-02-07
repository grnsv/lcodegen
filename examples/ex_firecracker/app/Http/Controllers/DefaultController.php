<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DefaultController as BaseDefaultController;
use App\Http\Responses\OpenApi\DescribeInstanceResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class DefaultController extends BaseDefaultController
{
    /**
     * GET /
     *
     * Returns general information about an instance.
     */
    public function describeInstance(
    ): DescribeInstanceResponse|ErrorResponse
    {
        // TODO: Implement DescribeInstance
        throw new \BadMethodCallException('Not implemented');
    }
}
