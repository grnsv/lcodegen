<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ApplicationController as BaseApplicationController;
use App\Http\Requests\AppsCheckTokenRequest;
use App\Http\Requests\AppsDeleteAuthorizationRequest;
use App\Http\Requests\AppsDeleteTokenRequest;
use App\Http\Requests\AppsResetTokenRequest;
use App\Http\Requests\AppsScopeTokenRequest;
use App\Http\Requests\OauthAuthorizationsListGrantsRequest;
use App\Http\Responses\OpenApi\AppsCheckTokenResponse;
use App\Http\Responses\OpenApi\AppsDeleteAuthorizationResponse;
use App\Http\Responses\OpenApi\AppsDeleteTokenResponse;
use App\Http\Responses\OpenApi\AppsResetTokenResponse;
use App\Http\Responses\OpenApi\AppsScopeTokenResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsDeleteGrantResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsGetGrantResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsListGrantsResponse;

final class ApplicationController extends BaseApplicationController
{
    /**
     * POST /applications/{client_id}/token
     *
     * Check a token
     */
    public function appsCheckToken(
        AppsCheckTokenRequest $request,
        string $client_id,
    ): AppsCheckTokenResponse
    {
        // TODO: Implement AppsCheckToken
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /applications/{client_id}/grant
     *
     * Delete an app authorization
     */
    public function appsDeleteAuthorization(
        AppsDeleteAuthorizationRequest $request,
        string $client_id,
    ): AppsDeleteAuthorizationResponse
    {
        // TODO: Implement AppsDeleteAuthorization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /applications/{client_id}/token
     *
     * Delete an app token
     */
    public function appsDeleteToken(
        AppsDeleteTokenRequest $request,
        string $client_id,
    ): AppsDeleteTokenResponse
    {
        // TODO: Implement AppsDeleteToken
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /applications/{client_id}/token
     *
     * Reset a token
     */
    public function appsResetToken(
        AppsResetTokenRequest $request,
        string $client_id,
    ): AppsResetTokenResponse
    {
        // TODO: Implement AppsResetToken
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /applications/{client_id}/token/scoped
     *
     * Create a scoped access token
     */
    public function appsScopeToken(
        AppsScopeTokenRequest $request,
        string $client_id,
    ): AppsScopeTokenResponse
    {
        // TODO: Implement AppsScopeToken
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /applications/grants/{grant_id}
     *
     * Delete a grant
     */
    public function oauthAuthorizationsDeleteGrant(
        int $grant_id,
    ): OauthAuthorizationsDeleteGrantResponse
    {
        // TODO: Implement OauthAuthorizationsDeleteGrant
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /applications/grants/{grant_id}
     *
     * Get a single grant
     */
    public function oauthAuthorizationsGetGrant(
        int $grant_id,
    ): OauthAuthorizationsGetGrantResponse
    {
        // TODO: Implement OauthAuthorizationsGetGrant
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /applications/grants
     *
     * List your grants
     */
    public function oauthAuthorizationsListGrants(
        OauthAuthorizationsListGrantsRequest $request,
    ): OauthAuthorizationsListGrantsResponse
    {
        // TODO: Implement OauthAuthorizationsListGrants
        throw new \BadMethodCallException('Not implemented');
    }
}
