<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EnterpriseController as BaseEnterpriseController;
use App\Http\Requests\EnterpriseAdminCreateSelfHostedRunnerGroupForEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminGetAuditLogRequest;
use App\Http\Requests\EnterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminListSelfHostedRunnerGroupsForEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminListSelfHostedRunnersForEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminListSelfHostedRunnersInGroupForEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminSetAllowedActionsEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminSetGithubActionsPermissionsEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminSetSelfHostedRunnersInGroupForEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminUpdateSelfHostedRunnerGroupForEnterpriseRequest;
use App\Http\Responses\OpenApi\BillingGetGithubActionsBillingGheResponse;
use App\Http\Responses\OpenApi\BillingGetGithubPackagesBillingGheResponse;
use App\Http\Responses\OpenApi\BillingGetSharedStorageBillingGheResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminAddOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminAddSelfHostedRunnerToGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminCreateRegistrationTokenForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminCreateRemoveTokenForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminCreateSelfHostedRunnerGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminDeleteSelfHostedRunnerFromEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminDeleteSelfHostedRunnerGroupFromEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminDisableSelectedOrganizationGithubActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminEnableSelectedOrganizationGithubActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetAllowedActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetAuditLogResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetGithubActionsPermissionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetSelfHostedRunnerForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetSelfHostedRunnerGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListRunnerApplicationsForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListSelfHostedRunnerGroupsForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListSelfHostedRunnersForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListSelfHostedRunnersInGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminRemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminRemoveSelfHostedRunnerFromGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetAllowedActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetGithubActionsPermissionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetSelfHostedRunnersInGroupForEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminUpdateSelfHostedRunnerGroupForEnterpriseResponse;

final class EnterpriseController extends BaseEnterpriseController
{
    /**
     * GET /enterprises/{enterprise}/settings/billing/actions
     *
     * Get GitHub Actions billing for an enterprise
     */
    public function billingGetGithubActionsBillingGhe(
        string $enterprise,
    ): BillingGetGithubActionsBillingGheResponse
    {
        // TODO: Implement BillingGetGithubActionsBillingGhe
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/settings/billing/packages
     *
     * Get GitHub Packages billing for an enterprise
     */
    public function billingGetGithubPackagesBillingGhe(
        string $enterprise,
    ): BillingGetGithubPackagesBillingGheResponse
    {
        // TODO: Implement BillingGetGithubPackagesBillingGhe
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/settings/billing/shared-storage
     *
     * Get shared storage billing for an enterprise
     */
    public function billingGetSharedStorageBillingGhe(
        string $enterprise,
    ): BillingGetSharedStorageBillingGheResponse
    {
        // TODO: Implement BillingGetSharedStorageBillingGhe
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}
     *
     * Add organization access to a self-hosted runner group in an enterprise
     */
    public function enterpriseAdminAddOrgAccessToSelfHostedRunnerGroupInEnterprise(
        string $enterprise,
        int $runner_group_id,
        int $org_id,
    ): EnterpriseAdminAddOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminAddOrgAccessToSelfHostedRunnerGroupInEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}
     *
     * Add a self-hosted runner to a group for an enterprise
     */
    public function enterpriseAdminAddSelfHostedRunnerToGroupForEnterprise(
        string $enterprise,
        int $runner_group_id,
        int $runner_id,
    ): EnterpriseAdminAddSelfHostedRunnerToGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminAddSelfHostedRunnerToGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /enterprises/{enterprise}/actions/runners/registration-token
     *
     * Create a registration token for an enterprise
     */
    public function enterpriseAdminCreateRegistrationTokenForEnterprise(
        string $enterprise,
    ): EnterpriseAdminCreateRegistrationTokenForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminCreateRegistrationTokenForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /enterprises/{enterprise}/actions/runners/remove-token
     *
     * Create a remove token for an enterprise
     */
    public function enterpriseAdminCreateRemoveTokenForEnterprise(
        string $enterprise,
    ): EnterpriseAdminCreateRemoveTokenForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminCreateRemoveTokenForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /enterprises/{enterprise}/actions/runner-groups
     *
     * Create a self-hosted runner group for an enterprise
     */
    public function enterpriseAdminCreateSelfHostedRunnerGroupForEnterprise(
        EnterpriseAdminCreateSelfHostedRunnerGroupForEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminCreateSelfHostedRunnerGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminCreateSelfHostedRunnerGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /enterprises/{enterprise}/actions/runners/{runner_id}
     *
     * Delete a self-hosted runner from an enterprise
     */
    public function enterpriseAdminDeleteSelfHostedRunnerFromEnterprise(
        string $enterprise,
        int $runner_id,
    ): EnterpriseAdminDeleteSelfHostedRunnerFromEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminDeleteSelfHostedRunnerFromEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}
     *
     * Delete a self-hosted runner group from an enterprise
     */
    public function enterpriseAdminDeleteSelfHostedRunnerGroupFromEnterprise(
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminDeleteSelfHostedRunnerGroupFromEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminDeleteSelfHostedRunnerGroupFromEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}
     *
     * Disable a selected organization for GitHub Actions in an enterprise
     */
    public function enterpriseAdminDisableSelectedOrganizationGithubActionsEnterprise(
        string $enterprise,
        int $org_id,
    ): EnterpriseAdminDisableSelectedOrganizationGithubActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminDisableSelectedOrganizationGithubActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}
     *
     * Enable a selected organization for GitHub Actions in an enterprise
     */
    public function enterpriseAdminEnableSelectedOrganizationGithubActionsEnterprise(
        string $enterprise,
        int $org_id,
    ): EnterpriseAdminEnableSelectedOrganizationGithubActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminEnableSelectedOrganizationGithubActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/permissions/selected-actions
     *
     * Get allowed actions for an enterprise
     */
    public function enterpriseAdminGetAllowedActionsEnterprise(
        string $enterprise,
    ): EnterpriseAdminGetAllowedActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminGetAllowedActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/audit-log
     *
     * Get the audit log for an enterprise
     */
    public function enterpriseAdminGetAuditLog(
        EnterpriseAdminGetAuditLogRequest $request,
        string $enterprise,
    ): EnterpriseAdminGetAuditLogResponse
    {
        // TODO: Implement EnterpriseAdminGetAuditLog
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/permissions
     *
     * Get GitHub Actions permissions for an enterprise
     */
    public function enterpriseAdminGetGithubActionsPermissionsEnterprise(
        string $enterprise,
    ): EnterpriseAdminGetGithubActionsPermissionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminGetGithubActionsPermissionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runners/{runner_id}
     *
     * Get a self-hosted runner for an enterprise
     */
    public function enterpriseAdminGetSelfHostedRunnerForEnterprise(
        string $enterprise,
        int $runner_id,
    ): EnterpriseAdminGetSelfHostedRunnerForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminGetSelfHostedRunnerForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}
     *
     * Get a self-hosted runner group for an enterprise
     */
    public function enterpriseAdminGetSelfHostedRunnerGroupForEnterprise(
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminGetSelfHostedRunnerGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminGetSelfHostedRunnerGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations
     *
     * List organization access to a self-hosted runner group in an enterprise
     */
    public function enterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterprise(
        EnterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterpriseRequest $request,
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListOrgAccessToSelfHostedRunnerGroupInEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runners/downloads
     *
     * List runner applications for an enterprise
     */
    public function enterpriseAdminListRunnerApplicationsForEnterprise(
        string $enterprise,
    ): EnterpriseAdminListRunnerApplicationsForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListRunnerApplicationsForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/permissions/organizations
     *
     * List selected organizations enabled for GitHub Actions in an enterprise
     */
    public function enterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterprise(
        EnterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListSelectedOrganizationsEnabledGithubActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runner-groups
     *
     * List self-hosted runner groups for an enterprise
     */
    public function enterpriseAdminListSelfHostedRunnerGroupsForEnterprise(
        EnterpriseAdminListSelfHostedRunnerGroupsForEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminListSelfHostedRunnerGroupsForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListSelfHostedRunnerGroupsForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runners
     *
     * List self-hosted runners for an enterprise
     */
    public function enterpriseAdminListSelfHostedRunnersForEnterprise(
        EnterpriseAdminListSelfHostedRunnersForEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminListSelfHostedRunnersForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListSelfHostedRunnersForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners
     *
     * List self-hosted runners in a group for an enterprise
     */
    public function enterpriseAdminListSelfHostedRunnersInGroupForEnterprise(
        EnterpriseAdminListSelfHostedRunnersInGroupForEnterpriseRequest $request,
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminListSelfHostedRunnersInGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListSelfHostedRunnersInGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}
     *
     * Remove organization access to a self-hosted runner group in an enterprise
     */
    public function enterpriseAdminRemoveOrgAccessToSelfHostedRunnerGroupInEnterprise(
        string $enterprise,
        int $runner_group_id,
        int $org_id,
    ): EnterpriseAdminRemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminRemoveOrgAccessToSelfHostedRunnerGroupInEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}
     *
     * Remove a self-hosted runner from a group for an enterprise
     */
    public function enterpriseAdminRemoveSelfHostedRunnerFromGroupForEnterprise(
        string $enterprise,
        int $runner_group_id,
        int $runner_id,
    ): EnterpriseAdminRemoveSelfHostedRunnerFromGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminRemoveSelfHostedRunnerFromGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/permissions/selected-actions
     *
     * Set allowed actions for an enterprise
     */
    public function enterpriseAdminSetAllowedActionsEnterprise(
        EnterpriseAdminSetAllowedActionsEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminSetAllowedActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminSetAllowedActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/permissions
     *
     * Set GitHub Actions permissions for an enterprise
     */
    public function enterpriseAdminSetGithubActionsPermissionsEnterprise(
        EnterpriseAdminSetGithubActionsPermissionsEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminSetGithubActionsPermissionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminSetGithubActionsPermissionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations
     *
     * Set organization access for a self-hosted runner group in an enterprise
     */
    public function enterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterprise(
        EnterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterpriseRequest $request,
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminSetOrgAccessToSelfHostedRunnerGroupInEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/permissions/organizations
     *
     * Set selected organizations enabled for GitHub Actions in an enterprise
     */
    public function enterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterprise(
        EnterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminSetSelectedOrganizationsEnabledGithubActionsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners
     *
     * Set self-hosted runners in a group for an enterprise
     */
    public function enterpriseAdminSetSelfHostedRunnersInGroupForEnterprise(
        EnterpriseAdminSetSelfHostedRunnersInGroupForEnterpriseRequest $request,
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminSetSelfHostedRunnersInGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminSetSelfHostedRunnersInGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}
     *
     * Update a self-hosted runner group for an enterprise
     */
    public function enterpriseAdminUpdateSelfHostedRunnerGroupForEnterprise(
        EnterpriseAdminUpdateSelfHostedRunnerGroupForEnterpriseRequest $request,
        string $enterprise,
        int $runner_group_id,
    ): EnterpriseAdminUpdateSelfHostedRunnerGroupForEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminUpdateSelfHostedRunnerGroupForEnterprise
        throw new \BadMethodCallException('Not implemented');
    }
}
