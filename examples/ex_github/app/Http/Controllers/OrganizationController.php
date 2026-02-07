<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OrganizationController as BaseOrganizationController;
use App\Http\Requests\OrgsListRequest;
use App\Http\Responses\OpenApi\OrgsListResponse;

final class OrganizationController extends BaseOrganizationController
{
    /**
     * GET /organizations
     *
     * List organizations
     */
    public function orgsList(
        OrgsListRequest $request,
    ): OrgsListResponse
    {
        // TODO: Implement OrgsList
        throw new \BadMethodCallException('Not implemented');
    }
}
