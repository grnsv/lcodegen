<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MetumController as BaseMetumController;
use App\Http\Responses\OpenApi\MetaGetResponse;

final class MetumController extends BaseMetumController
{
    /**
     * GET /meta
     *
     * Get GitHub meta information
     */
    public function metaGet(
    ): MetaGetResponse
    {
        // TODO: Implement MetaGet
        throw new \BadMethodCallException('Not implemented');
    }
}
