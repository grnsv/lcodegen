<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ZenController as BaseZenController;
use App\Http\Responses\OpenApi\MetaGetZenResponse;

final class ZenController extends BaseZenController
{
    /**
     * GET /zen
     *
     * Get the Zen of GitHub
     */
    public function metaGetZen(
    ): MetaGetZenResponse
    {
        // TODO: Implement MetaGetZen
        throw new \BadMethodCallException('Not implemented');
    }
}
