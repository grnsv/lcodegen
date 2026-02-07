<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MarketplaceListingController as BaseMarketplaceListingController;
use App\Http\Requests\AppsListAccountsForPlanRequest;
use App\Http\Requests\AppsListAccountsForPlanStubbedRequest;
use App\Http\Requests\AppsListPlansRequest;
use App\Http\Requests\AppsListPlansStubbedRequest;
use App\Http\Responses\OpenApi\AppsGetSubscriptionPlanForAccountResponse;
use App\Http\Responses\OpenApi\AppsGetSubscriptionPlanForAccountStubbedResponse;
use App\Http\Responses\OpenApi\AppsListAccountsForPlanResponse;
use App\Http\Responses\OpenApi\AppsListAccountsForPlanStubbedResponse;
use App\Http\Responses\OpenApi\AppsListPlansResponse;
use App\Http\Responses\OpenApi\AppsListPlansStubbedResponse;

final class MarketplaceListingController extends BaseMarketplaceListingController
{
    /**
     * GET /marketplace_listing/accounts/{account_id}
     *
     * Get a subscription plan for an account
     */
    public function appsGetSubscriptionPlanForAccount(
        int $account_id,
    ): AppsGetSubscriptionPlanForAccountResponse
    {
        // TODO: Implement AppsGetSubscriptionPlanForAccount
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /marketplace_listing/stubbed/accounts/{account_id}
     *
     * Get a subscription plan for an account (stubbed)
     */
    public function appsGetSubscriptionPlanForAccountStubbed(
        int $account_id,
    ): AppsGetSubscriptionPlanForAccountStubbedResponse
    {
        // TODO: Implement AppsGetSubscriptionPlanForAccountStubbed
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /marketplace_listing/plans/{plan_id}/accounts
     *
     * List accounts for a plan
     */
    public function appsListAccountsForPlan(
        AppsListAccountsForPlanRequest $request,
        int $plan_id,
    ): AppsListAccountsForPlanResponse
    {
        // TODO: Implement AppsListAccountsForPlan
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /marketplace_listing/stubbed/plans/{plan_id}/accounts
     *
     * List accounts for a plan (stubbed)
     */
    public function appsListAccountsForPlanStubbed(
        AppsListAccountsForPlanStubbedRequest $request,
        int $plan_id,
    ): AppsListAccountsForPlanStubbedResponse
    {
        // TODO: Implement AppsListAccountsForPlanStubbed
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /marketplace_listing/plans
     *
     * List plans
     */
    public function appsListPlans(
        AppsListPlansRequest $request,
    ): AppsListPlansResponse
    {
        // TODO: Implement AppsListPlans
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /marketplace_listing/stubbed/plans
     *
     * List plans (stubbed)
     */
    public function appsListPlansStubbed(
        AppsListPlansStubbedRequest $request,
    ): AppsListPlansStubbedResponse
    {
        // TODO: Implement AppsListPlansStubbed
        throw new \BadMethodCallException('Not implemented');
    }
}
