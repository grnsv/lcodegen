<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OctocatController as BaseOctocatController;
use App\Http\Requests\MetaGetOctocatRequest;
use App\Http\Responses\OpenApi\MetaGetOctocatResponse;

final class OctocatController extends BaseOctocatController
{
    /**
     * GET /octocat
     *
     * Get Octocat
     */
    public function metaGetOctocat(
        MetaGetOctocatRequest $request,
    ): MetaGetOctocatResponse
    {
        // TODO: Implement MetaGetOctocat
        throw new \BadMethodCallException('Not implemented');
    }
}
