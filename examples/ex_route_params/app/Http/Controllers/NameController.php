<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NameController as BaseNameController;
use App\Http\Responses\OpenApi\DataGetAnyResponse;
use App\Http\Responses\OpenApi\DataGetIDResponse;
use App\Http\Responses\OpenApi\DataGetResponse;

final class NameController extends BaseNameController
{
    /**
     * GET /name/{id}/{key}
     */
    public function dataGet(
        int $id,
        string $key,
    ): DataGetResponse
    {
        // TODO: Implement DataGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /name
     */
    public function dataGetAny(
    ): DataGetAnyResponse
    {
        // TODO: Implement DataGetAny
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /name/{id}
     */
    public function dataGetID(
        int $id,
    ): DataGetIDResponse
    {
        // TODO: Implement DataGetID
        throw new \BadMethodCallException('Not implemented');
    }
}
