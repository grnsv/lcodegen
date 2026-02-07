<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AppController as BaseAppController;
use App\Http\Requests\AppsCreateInstallationAccessTokenRequest;
use App\Http\Requests\AppsListWebhookDeliveriesRequest;
use App\Http\Requests\AppsUpdateWebhookConfigForAppRequest;
use App\Http\Responses\OpenApi\AppsCreateInstallationAccessTokenResponse;
use App\Http\Responses\OpenApi\AppsDeleteInstallationResponse;
use App\Http\Responses\OpenApi\AppsGetAuthenticatedResponse;
use App\Http\Responses\OpenApi\AppsGetBySlugResponse;
use App\Http\Responses\OpenApi\AppsGetWebhookConfigForAppResponse;
use App\Http\Responses\OpenApi\AppsGetWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\AppsListWebhookDeliveriesResponse;
use App\Http\Responses\OpenApi\AppsRedeliverWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\AppsSuspendInstallationResponse;
use App\Http\Responses\OpenApi\AppsUnsuspendInstallationResponse;
use App\Http\Responses\OpenApi\AppsUpdateWebhookConfigForAppResponse;

final class AppController extends BaseAppController
{
    /**
     * POST /app/installations/{installation_id}/access_tokens
     *
     * Create an installation access token for an app
     */
    public function appsCreateInstallationAccessToken(
        AppsCreateInstallationAccessTokenRequest $request,
        int $installation_id,
    ): AppsCreateInstallationAccessTokenResponse
    {
        // TODO: Implement AppsCreateInstallationAccessToken
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /app/installations/{installation_id}
     *
     * Delete an installation for the authenticated app
     */
    public function appsDeleteInstallation(
        int $installation_id,
    ): AppsDeleteInstallationResponse
    {
        // TODO: Implement AppsDeleteInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /app
     *
     * Get the authenticated app
     */
    public function appsGetAuthenticated(
    ): AppsGetAuthenticatedResponse
    {
        // TODO: Implement AppsGetAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /apps/{app_slug}
     *
     * Get an app
     */
    public function appsGetBySlug(
        string $app_slug,
    ): AppsGetBySlugResponse
    {
        // TODO: Implement AppsGetBySlug
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /app/hook/config
     *
     * Get a webhook configuration for an app
     */
    public function appsGetWebhookConfigForApp(
    ): AppsGetWebhookConfigForAppResponse
    {
        // TODO: Implement AppsGetWebhookConfigForApp
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /app/hook/deliveries/{delivery_id}
     *
     * Get a delivery for an app webhook
     */
    public function appsGetWebhookDelivery(
        int $delivery_id,
    ): AppsGetWebhookDeliveryResponse
    {
        // TODO: Implement AppsGetWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /app/hook/deliveries
     *
     * List deliveries for an app webhook
     */
    public function appsListWebhookDeliveries(
        AppsListWebhookDeliveriesRequest $request,
    ): AppsListWebhookDeliveriesResponse
    {
        // TODO: Implement AppsListWebhookDeliveries
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /app/hook/deliveries/{delivery_id}/attempts
     *
     * Redeliver a delivery for an app webhook
     */
    public function appsRedeliverWebhookDelivery(
        int $delivery_id,
    ): AppsRedeliverWebhookDeliveryResponse
    {
        // TODO: Implement AppsRedeliverWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /app/installations/{installation_id}/suspended
     *
     * Suspend an app installation
     */
    public function appsSuspendInstallation(
        int $installation_id,
    ): AppsSuspendInstallationResponse
    {
        // TODO: Implement AppsSuspendInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /app/installations/{installation_id}/suspended
     *
     * Unsuspend an app installation
     */
    public function appsUnsuspendInstallation(
        int $installation_id,
    ): AppsUnsuspendInstallationResponse
    {
        // TODO: Implement AppsUnsuspendInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /app/hook/config
     *
     * Update a webhook configuration for an app
     */
    public function appsUpdateWebhookConfigForApp(
        AppsUpdateWebhookConfigForAppRequest $request,
    ): AppsUpdateWebhookConfigForAppResponse
    {
        // TODO: Implement AppsUpdateWebhookConfigForApp
        throw new \BadMethodCallException('Not implemented');
    }
}
