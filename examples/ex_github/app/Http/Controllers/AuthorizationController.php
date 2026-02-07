<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AuthorizationController as BaseAuthorizationController;
use App\Http\Requests\OauthAuthorizationsCreateAuthorizationRequest;
use App\Http\Requests\OauthAuthorizationsGetOrCreateAuthorizationForAppRequest;
use App\Http\Requests\OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprintRequest;
use App\Http\Requests\OauthAuthorizationsListAuthorizationsRequest;
use App\Http\Requests\OauthAuthorizationsUpdateAuthorizationRequest;
use App\Http\Responses\OpenApi\OauthAuthorizationsCreateAuthorizationResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsDeleteAuthorizationResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsGetAuthorizationResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprintResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsGetOrCreateAuthorizationForAppResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsListAuthorizationsResponse;
use App\Http\Responses\OpenApi\OauthAuthorizationsUpdateAuthorizationResponse;

final class AuthorizationController extends BaseAuthorizationController
{
    /**
     * POST /authorizations
     *
     * Create a new authorization
     */
    public function oauthAuthorizationsCreateAuthorization(
        OauthAuthorizationsCreateAuthorizationRequest $request,
    ): OauthAuthorizationsCreateAuthorizationResponse
    {
        // TODO: Implement OauthAuthorizationsCreateAuthorization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /authorizations/{authorization_id}
     *
     * Delete an authorization
     */
    public function oauthAuthorizationsDeleteAuthorization(
        int $authorization_id,
    ): OauthAuthorizationsDeleteAuthorizationResponse
    {
        // TODO: Implement OauthAuthorizationsDeleteAuthorization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /authorizations/{authorization_id}
     *
     * Get a single authorization
     */
    public function oauthAuthorizationsGetAuthorization(
        int $authorization_id,
    ): OauthAuthorizationsGetAuthorizationResponse
    {
        // TODO: Implement OauthAuthorizationsGetAuthorization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /authorizations/clients/{client_id}
     *
     * Get-or-create an authorization for a specific app
     */
    public function oauthAuthorizationsGetOrCreateAuthorizationForApp(
        OauthAuthorizationsGetOrCreateAuthorizationForAppRequest $request,
        string $client_id,
    ): OauthAuthorizationsGetOrCreateAuthorizationForAppResponse
    {
        // TODO: Implement OauthAuthorizationsGetOrCreateAuthorizationForApp
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /authorizations/clients/{client_id}/{fingerprint}
     *
     * Get-or-create an authorization for a specific app and fingerprint
     */
    public function oauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprint(
        OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprintRequest $request,
        string $client_id,
        string $fingerprint,
    ): OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprintResponse
    {
        // TODO: Implement OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprint
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /authorizations
     *
     * List your authorizations
     */
    public function oauthAuthorizationsListAuthorizations(
        OauthAuthorizationsListAuthorizationsRequest $request,
    ): OauthAuthorizationsListAuthorizationsResponse
    {
        // TODO: Implement OauthAuthorizationsListAuthorizations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /authorizations/{authorization_id}
     *
     * Update an existing authorization
     */
    public function oauthAuthorizationsUpdateAuthorization(
        OauthAuthorizationsUpdateAuthorizationRequest $request,
        int $authorization_id,
    ): OauthAuthorizationsUpdateAuthorizationResponse
    {
        // TODO: Implement OauthAuthorizationsUpdateAuthorization
        throw new \BadMethodCallException('Not implemented');
    }
}
