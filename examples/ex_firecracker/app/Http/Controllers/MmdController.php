<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MmdController as BaseMmdController;
use App\Http\Requests\MmdsConfigPutRequest;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\MmdsConfigPutResponse;
use App\Http\Responses\OpenApi\MmdsGetResponse;
use App\Http\Responses\OpenApi\MmdsPatchResponse;
use App\Http\Responses\OpenApi\MmdsPutResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class MmdController extends BaseMmdController
{
    /**
     * PUT /mmds/config
     *
     * Set MMDS configuration. Pre-boot only.
     */
    public function mmdsConfigPut(
        MmdsConfigPutRequest $request,
    ): MmdsConfigPutResponse|ErrorResponse
    {
        // TODO: Implement MmdsConfigPut
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /mmds
     *
     * Get the MMDS data store.
     */
    public function mmdsGet(
    ): MmdsGetResponse|ErrorResponse
    {
        // TODO: Implement MmdsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /mmds
     *
     * Updates the MMDS data store.
     */
    public function mmdsPatch(
        Request $request,
    ): MmdsPatchResponse|ErrorResponse
    {
        // TODO: Implement MmdsPatch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /mmds
     *
     * Creates a MMDS (Microvm Metadata Service) data store.
     */
    public function mmdsPut(
        Request $request,
    ): MmdsPutResponse|ErrorResponse
    {
        // TODO: Implement MmdsPut
        throw new \BadMethodCallException('Not implemented');
    }
}
