<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\VersionController as BaseVersionController;
use App\Http\Responses\OpenApi\GetCodeVersionResponse;

final class VersionController extends BaseVersionController
{
    /**
     * GET /version/
     */
    public function getCodeVersion(
    ): GetCodeVersionResponse
    {
        // TODO: Implement GetCodeVersion
        throw new \BadMethodCallException('Not implemented');
    }
}
