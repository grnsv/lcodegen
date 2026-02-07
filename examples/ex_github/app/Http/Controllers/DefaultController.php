<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\DefaultController as BaseDefaultController;
use App\Http\Responses\OpenApi\MetaRootResponse;

final class DefaultController extends BaseDefaultController
{
    /**
     * GET /
     *
     * GitHub API Root
     */
    public function metaRoot(
    ): MetaRootResponse
    {
        // TODO: Implement MetaRoot
        throw new \BadMethodCallException('Not implemented');
    }
}
