<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CodesOfConductController as BaseCodesOfConductController;
use App\Http\Responses\OpenApi\CodesOfConductGetAllCodesOfConductResponse;
use App\Http\Responses\OpenApi\CodesOfConductGetConductCodeResponse;

final class CodesOfConductController extends BaseCodesOfConductController
{
    /**
     * GET /codes_of_conduct
     *
     * Get all codes of conduct
     */
    public function codesOfConductGetAllCodesOfConduct(
    ): CodesOfConductGetAllCodesOfConductResponse
    {
        // TODO: Implement CodesOfConductGetAllCodesOfConduct
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /codes_of_conduct/{key}
     *
     * Get a code of conduct
     */
    public function codesOfConductGetConductCode(
        string $key,
    ): CodesOfConductGetConductCodeResponse
    {
        // TODO: Implement CodesOfConductGetConductCode
        throw new \BadMethodCallException('Not implemented');
    }
}
