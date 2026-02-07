<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OrgController as BaseOrgController;
use App\Http\Requests\ActionsCreateOrUpdateOrgSecretRequest;
use App\Http\Requests\ActionsCreateSelfHostedRunnerGroupForOrgRequest;
use App\Http\Requests\ActionsListOrgSecretsRequest;
use App\Http\Requests\ActionsListRepoAccessToSelfHostedRunnerGroupInOrgRequest;
use App\Http\Requests\ActionsListSelectedReposForOrgSecretRequest;
use App\Http\Requests\ActionsListSelectedRepositoriesEnabledGithubActionsOrganizationRequest;
use App\Http\Requests\ActionsListSelfHostedRunnerGroupsForOrgRequest;
use App\Http\Requests\ActionsListSelfHostedRunnersForOrgRequest;
use App\Http\Requests\ActionsListSelfHostedRunnersInGroupForOrgRequest;
use App\Http\Requests\ActionsSetAllowedActionsOrganizationRequest;
use App\Http\Requests\ActionsSetGithubActionsPermissionsOrganizationRequest;
use App\Http\Requests\ActionsSetRepoAccessToSelfHostedRunnerGroupInOrgRequest;
use App\Http\Requests\ActionsSetSelectedReposForOrgSecretRequest;
use App\Http\Requests\ActionsSetSelectedRepositoriesEnabledGithubActionsOrganizationRequest;
use App\Http\Requests\ActionsSetSelfHostedRunnersInGroupForOrgRequest;
use App\Http\Requests\ActionsUpdateSelfHostedRunnerGroupForOrgRequest;
use App\Http\Requests\ActivityListPublicOrgEventsRequest;
use App\Http\Requests\InteractionsSetRestrictionsForOrgRequest;
use App\Http\Requests\IssuesListForOrgRequest;
use App\Http\Requests\MigrationsGetStatusForOrgRequest;
use App\Http\Requests\MigrationsListForOrgRequest;
use App\Http\Requests\MigrationsListReposForOrgRequest;
use App\Http\Requests\MigrationsStartForOrgRequest;
use App\Http\Requests\OrgsCreateInvitationRequest;
use App\Http\Requests\OrgsCreateWebhookRequest;
use App\Http\Requests\OrgsGetAuditLogRequest;
use App\Http\Requests\OrgsListFailedInvitationsRequest;
use App\Http\Requests\OrgsListInvitationTeamsRequest;
use App\Http\Requests\OrgsListMembersRequest;
use App\Http\Requests\OrgsListOutsideCollaboratorsRequest;
use App\Http\Requests\OrgsListPendingInvitationsRequest;
use App\Http\Requests\OrgsListPublicMembersRequest;
use App\Http\Requests\OrgsListWebhookDeliveriesRequest;
use App\Http\Requests\OrgsListWebhooksRequest;
use App\Http\Requests\OrgsSetMembershipForUserRequest;
use App\Http\Requests\OrgsUpdateWebhookRequest;
use App\Http\Requests\OrgsUpdateWebhookConfigForOrgRequest;
use App\Http\Requests\PackagesGetAllPackageVersionsForPackageOwnedByOrgRequest;
use App\Http\Requests\PackagesListPackagesForOrganizationRequest;
use App\Http\Requests\PackagesRestorePackageForOrgRequest;
use App\Http\Requests\ProjectsCreateForOrgRequest;
use App\Http\Requests\ProjectsListForOrgRequest;
use App\Http\Requests\ReactionsCreateForTeamDiscussionCommentInOrgRequest;
use App\Http\Requests\ReactionsCreateForTeamDiscussionInOrgRequest;
use App\Http\Requests\ReactionsListForTeamDiscussionCommentInOrgRequest;
use App\Http\Requests\ReactionsListForTeamDiscussionInOrgRequest;
use App\Http\Requests\ReposCreateInOrgRequest;
use App\Http\Requests\ReposListForOrgRequest;
use App\Http\Requests\SecretScanningListAlertsForOrgRequest;
use App\Http\Requests\TeamsAddOrUpdateMembershipForUserInOrgRequest;
use App\Http\Requests\TeamsAddOrUpdateProjectPermissionsInOrgRequest;
use App\Http\Requests\TeamsAddOrUpdateRepoPermissionsInOrgRequest;
use App\Http\Requests\TeamsCreateRequest;
use App\Http\Requests\TeamsCreateDiscussionCommentInOrgRequest;
use App\Http\Requests\TeamsCreateDiscussionInOrgRequest;
use App\Http\Requests\TeamsCreateOrUpdateIdpGroupConnectionsInOrgRequest;
use App\Http\Requests\TeamsListRequest;
use App\Http\Requests\TeamsListChildInOrgRequest;
use App\Http\Requests\TeamsListDiscussionCommentsInOrgRequest;
use App\Http\Requests\TeamsListDiscussionsInOrgRequest;
use App\Http\Requests\TeamsListIdpGroupsForOrgRequest;
use App\Http\Requests\TeamsListMembersInOrgRequest;
use App\Http\Requests\TeamsListPendingInvitationsInOrgRequest;
use App\Http\Requests\TeamsListProjectsInOrgRequest;
use App\Http\Requests\TeamsListReposInOrgRequest;
use App\Http\Requests\TeamsUpdateDiscussionCommentInOrgRequest;
use App\Http\Requests\TeamsUpdateDiscussionInOrgRequest;
use App\Http\Requests\TeamsUpdateInOrgRequest;
use App\Http\Responses\OpenApi\ActionsAddRepoAccessToSelfHostedRunnerGroupInOrgResponse;
use App\Http\Responses\OpenApi\ActionsAddSelectedRepoToOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsAddSelfHostedRunnerToGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsCreateOrUpdateOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsCreateRegistrationTokenForOrgResponse;
use App\Http\Responses\OpenApi\ActionsCreateRemoveTokenForOrgResponse;
use App\Http\Responses\OpenApi\ActionsCreateSelfHostedRunnerGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsDeleteOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsDeleteSelfHostedRunnerFromOrgResponse;
use App\Http\Responses\OpenApi\ActionsDeleteSelfHostedRunnerGroupFromOrgResponse;
use App\Http\Responses\OpenApi\ActionsDisableSelectedRepositoryGithubActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsEnableSelectedRepositoryGithubActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsGetAllowedActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsGetGithubActionsPermissionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsGetOrgPublicKeyResponse;
use App\Http\Responses\OpenApi\ActionsGetOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsGetSelfHostedRunnerForOrgResponse;
use App\Http\Responses\OpenApi\ActionsGetSelfHostedRunnerGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsListOrgSecretsResponse;
use App\Http\Responses\OpenApi\ActionsListRepoAccessToSelfHostedRunnerGroupInOrgResponse;
use App\Http\Responses\OpenApi\ActionsListRunnerApplicationsForOrgResponse;
use App\Http\Responses\OpenApi\ActionsListSelectedReposForOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsListSelectedRepositoriesEnabledGithubActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsListSelfHostedRunnerGroupsForOrgResponse;
use App\Http\Responses\OpenApi\ActionsListSelfHostedRunnersForOrgResponse;
use App\Http\Responses\OpenApi\ActionsListSelfHostedRunnersInGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsRemoveRepoAccessToSelfHostedRunnerGroupInOrgResponse;
use App\Http\Responses\OpenApi\ActionsRemoveSelectedRepoFromOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsRemoveSelfHostedRunnerFromGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsSetAllowedActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsSetGithubActionsPermissionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsSetRepoAccessToSelfHostedRunnerGroupInOrgResponse;
use App\Http\Responses\OpenApi\ActionsSetSelectedReposForOrgSecretResponse;
use App\Http\Responses\OpenApi\ActionsSetSelectedRepositoriesEnabledGithubActionsOrganizationResponse;
use App\Http\Responses\OpenApi\ActionsSetSelfHostedRunnersInGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActionsUpdateSelfHostedRunnerGroupForOrgResponse;
use App\Http\Responses\OpenApi\ActivityListPublicOrgEventsResponse;
use App\Http\Responses\OpenApi\BillingGetGithubActionsBillingOrgResponse;
use App\Http\Responses\OpenApi\BillingGetGithubPackagesBillingOrgResponse;
use App\Http\Responses\OpenApi\BillingGetSharedStorageBillingOrgResponse;
use App\Http\Responses\OpenApi\InteractionsRemoveRestrictionsForOrgResponse;
use App\Http\Responses\OpenApi\InteractionsSetRestrictionsForOrgResponse;
use App\Http\Responses\OpenApi\IssuesListForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsDeleteArchiveForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsGetStatusForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsListForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsListReposForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsStartForOrgResponse;
use App\Http\Responses\OpenApi\MigrationsUnlockRepoForOrgResponse;
use App\Http\Responses\OpenApi\OrgsBlockUserResponse;
use App\Http\Responses\OpenApi\OrgsCancelInvitationResponse;
use App\Http\Responses\OpenApi\OrgsCheckBlockedUserResponse;
use App\Http\Responses\OpenApi\OrgsCheckMembershipForUserResponse;
use App\Http\Responses\OpenApi\OrgsCheckPublicMembershipForUserResponse;
use App\Http\Responses\OpenApi\OrgsConvertMemberToOutsideCollaboratorResponse;
use App\Http\Responses\OpenApi\OrgsCreateInvitationResponse;
use App\Http\Responses\OpenApi\OrgsCreateWebhookResponse;
use App\Http\Responses\OpenApi\OrgsDeleteWebhookResponse;
use App\Http\Responses\OpenApi\OrgsGetAuditLogResponse;
use App\Http\Responses\OpenApi\OrgsGetMembershipForUserResponse;
use App\Http\Responses\OpenApi\OrgsGetResponse;
use App\Http\Responses\OpenApi\OrgsGetWebhookConfigForOrgResponse;
use App\Http\Responses\OpenApi\OrgsGetWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\OrgsGetWebhookResponse;
use App\Http\Responses\OpenApi\OrgsListBlockedUsersResponse;
use App\Http\Responses\OpenApi\OrgsListFailedInvitationsResponse;
use App\Http\Responses\OpenApi\OrgsListInvitationTeamsResponse;
use App\Http\Responses\OpenApi\OrgsListMembersResponse;
use App\Http\Responses\OpenApi\OrgsListOutsideCollaboratorsResponse;
use App\Http\Responses\OpenApi\OrgsListPendingInvitationsResponse;
use App\Http\Responses\OpenApi\OrgsListPublicMembersResponse;
use App\Http\Responses\OpenApi\OrgsListSamlSsoAuthorizationsResponse;
use App\Http\Responses\OpenApi\OrgsListWebhookDeliveriesResponse;
use App\Http\Responses\OpenApi\OrgsListWebhooksResponse;
use App\Http\Responses\OpenApi\OrgsPingWebhookResponse;
use App\Http\Responses\OpenApi\OrgsRedeliverWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\OrgsRemoveMemberResponse;
use App\Http\Responses\OpenApi\OrgsRemoveMembershipForUserResponse;
use App\Http\Responses\OpenApi\OrgsRemoveOutsideCollaboratorResponse;
use App\Http\Responses\OpenApi\OrgsRemovePublicMembershipForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsRemoveSamlSsoAuthorizationResponse;
use App\Http\Responses\OpenApi\OrgsSetMembershipForUserResponse;
use App\Http\Responses\OpenApi\OrgsSetPublicMembershipForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsUnblockUserResponse;
use App\Http\Responses\OpenApi\OrgsUpdateWebhookConfigForOrgResponse;
use App\Http\Responses\OpenApi\OrgsUpdateWebhookResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageForOrgResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageVersionForOrgResponse;
use App\Http\Responses\OpenApi\PackagesGetAllPackageVersionsForPackageOwnedByOrgResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageForOrganizationResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageVersionForOrganizationResponse;
use App\Http\Responses\OpenApi\PackagesListPackagesForOrganizationResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageForOrgResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageVersionForOrgResponse;
use App\Http\Responses\OpenApi\ProjectsCreateForOrgResponse;
use App\Http\Responses\OpenApi\ProjectsListForOrgResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForTeamDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForTeamDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForTeamDiscussionCommentResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForTeamDiscussionResponse;
use App\Http\Responses\OpenApi\ReactionsListForTeamDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\ReactionsListForTeamDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\ReposCreateInOrgResponse;
use App\Http\Responses\OpenApi\ReposListForOrgResponse;
use App\Http\Responses\OpenApi\SecretScanningListAlertsForOrgResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateMembershipForUserInOrgResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateProjectPermissionsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateRepoPermissionsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCheckPermissionsForProjectInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCheckPermissionsForRepoInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCreateDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCreateDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCreateOrUpdateIdpGroupConnectionsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsCreateResponse;
use App\Http\Responses\OpenApi\TeamsDeleteDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\TeamsDeleteDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\TeamsDeleteInOrgResponse;
use App\Http\Responses\OpenApi\TeamsGetByNameResponse;
use App\Http\Responses\OpenApi\TeamsGetDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\TeamsGetDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\TeamsGetMembershipForUserInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListChildInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListDiscussionCommentsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListDiscussionsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListIdpGroupsForOrgResponse;
use App\Http\Responses\OpenApi\TeamsListIdpGroupsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListMembersInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListPendingInvitationsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListProjectsInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListReposInOrgResponse;
use App\Http\Responses\OpenApi\TeamsListResponse;
use App\Http\Responses\OpenApi\TeamsRemoveMembershipForUserInOrgResponse;
use App\Http\Responses\OpenApi\TeamsRemoveProjectInOrgResponse;
use App\Http\Responses\OpenApi\TeamsRemoveRepoInOrgResponse;
use App\Http\Responses\OpenApi\TeamsUpdateDiscussionCommentInOrgResponse;
use App\Http\Responses\OpenApi\TeamsUpdateDiscussionInOrgResponse;
use App\Http\Responses\OpenApi\TeamsUpdateInOrgResponse;

final class OrgController extends BaseOrgController
{
    /**
     * PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}
     *
     * Add repository access to a self-hosted runner group in an organization
     */
    public function actionsAddRepoAccessToSelfHostedRunnerGroupInOrg(
        string $org,
        int $runner_group_id,
        int $repository_id,
    ): ActionsAddRepoAccessToSelfHostedRunnerGroupInOrgResponse
    {
        // TODO: Implement ActionsAddRepoAccessToSelfHostedRunnerGroupInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}
     *
     * Add selected repository to an organization secret
     */
    public function actionsAddSelectedRepoToOrgSecret(
        string $org,
        string $secret_name,
        int $repository_id,
    ): ActionsAddSelectedRepoToOrgSecretResponse
    {
        // TODO: Implement ActionsAddSelectedRepoToOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}
     *
     * Add a self-hosted runner to a group for an organization
     */
    public function actionsAddSelfHostedRunnerToGroupForOrg(
        string $org,
        int $runner_group_id,
        int $runner_id,
    ): ActionsAddSelfHostedRunnerToGroupForOrgResponse
    {
        // TODO: Implement ActionsAddSelfHostedRunnerToGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/secrets/{secret_name}
     *
     * Create or update an organization secret
     */
    public function actionsCreateOrUpdateOrgSecret(
        ActionsCreateOrUpdateOrgSecretRequest $request,
        string $org,
        string $secret_name,
    ): ActionsCreateOrUpdateOrgSecretResponse
    {
        // TODO: Implement ActionsCreateOrUpdateOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/actions/runners/registration-token
     *
     * Create a registration token for an organization
     */
    public function actionsCreateRegistrationTokenForOrg(
        string $org,
    ): ActionsCreateRegistrationTokenForOrgResponse
    {
        // TODO: Implement ActionsCreateRegistrationTokenForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/actions/runners/remove-token
     *
     * Create a remove token for an organization
     */
    public function actionsCreateRemoveTokenForOrg(
        string $org,
    ): ActionsCreateRemoveTokenForOrgResponse
    {
        // TODO: Implement ActionsCreateRemoveTokenForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/actions/runner-groups
     *
     * Create a self-hosted runner group for an organization
     */
    public function actionsCreateSelfHostedRunnerGroupForOrg(
        ActionsCreateSelfHostedRunnerGroupForOrgRequest $request,
        string $org,
    ): ActionsCreateSelfHostedRunnerGroupForOrgResponse
    {
        // TODO: Implement ActionsCreateSelfHostedRunnerGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/secrets/{secret_name}
     *
     * Delete an organization secret
     */
    public function actionsDeleteOrgSecret(
        string $org,
        string $secret_name,
    ): ActionsDeleteOrgSecretResponse
    {
        // TODO: Implement ActionsDeleteOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/runners/{runner_id}
     *
     * Delete a self-hosted runner from an organization
     */
    public function actionsDeleteSelfHostedRunnerFromOrg(
        string $org,
        int $runner_id,
    ): ActionsDeleteSelfHostedRunnerFromOrgResponse
    {
        // TODO: Implement ActionsDeleteSelfHostedRunnerFromOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}
     *
     * Delete a self-hosted runner group from an organization
     */
    public function actionsDeleteSelfHostedRunnerGroupFromOrg(
        string $org,
        int $runner_group_id,
    ): ActionsDeleteSelfHostedRunnerGroupFromOrgResponse
    {
        // TODO: Implement ActionsDeleteSelfHostedRunnerGroupFromOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}
     *
     * Disable a selected repository for GitHub Actions in an organization
     */
    public function actionsDisableSelectedRepositoryGithubActionsOrganization(
        string $org,
        int $repository_id,
    ): ActionsDisableSelectedRepositoryGithubActionsOrganizationResponse
    {
        // TODO: Implement ActionsDisableSelectedRepositoryGithubActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/permissions/repositories/{repository_id}
     *
     * Enable a selected repository for GitHub Actions in an organization
     */
    public function actionsEnableSelectedRepositoryGithubActionsOrganization(
        string $org,
        int $repository_id,
    ): ActionsEnableSelectedRepositoryGithubActionsOrganizationResponse
    {
        // TODO: Implement ActionsEnableSelectedRepositoryGithubActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/permissions/selected-actions
     *
     * Get allowed actions for an organization
     */
    public function actionsGetAllowedActionsOrganization(
        string $org,
    ): ActionsGetAllowedActionsOrganizationResponse
    {
        // TODO: Implement ActionsGetAllowedActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/permissions
     *
     * Get GitHub Actions permissions for an organization
     */
    public function actionsGetGithubActionsPermissionsOrganization(
        string $org,
    ): ActionsGetGithubActionsPermissionsOrganizationResponse
    {
        // TODO: Implement ActionsGetGithubActionsPermissionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/secrets/public-key
     *
     * Get an organization public key
     */
    public function actionsGetOrgPublicKey(
        string $org,
    ): ActionsGetOrgPublicKeyResponse
    {
        // TODO: Implement ActionsGetOrgPublicKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/secrets/{secret_name}
     *
     * Get an organization secret
     */
    public function actionsGetOrgSecret(
        string $org,
        string $secret_name,
    ): ActionsGetOrgSecretResponse
    {
        // TODO: Implement ActionsGetOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runners/{runner_id}
     *
     * Get a self-hosted runner for an organization
     */
    public function actionsGetSelfHostedRunnerForOrg(
        string $org,
        int $runner_id,
    ): ActionsGetSelfHostedRunnerForOrgResponse
    {
        // TODO: Implement ActionsGetSelfHostedRunnerForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runner-groups/{runner_group_id}
     *
     * Get a self-hosted runner group for an organization
     */
    public function actionsGetSelfHostedRunnerGroupForOrg(
        string $org,
        int $runner_group_id,
    ): ActionsGetSelfHostedRunnerGroupForOrgResponse
    {
        // TODO: Implement ActionsGetSelfHostedRunnerGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/secrets
     *
     * List organization secrets
     */
    public function actionsListOrgSecrets(
        ActionsListOrgSecretsRequest $request,
        string $org,
    ): ActionsListOrgSecretsResponse
    {
        // TODO: Implement ActionsListOrgSecrets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories
     *
     * List repository access to a self-hosted runner group in an organization
     */
    public function actionsListRepoAccessToSelfHostedRunnerGroupInOrg(
        ActionsListRepoAccessToSelfHostedRunnerGroupInOrgRequest $request,
        string $org,
        int $runner_group_id,
    ): ActionsListRepoAccessToSelfHostedRunnerGroupInOrgResponse
    {
        // TODO: Implement ActionsListRepoAccessToSelfHostedRunnerGroupInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runners/downloads
     *
     * List runner applications for an organization
     */
    public function actionsListRunnerApplicationsForOrg(
        string $org,
    ): ActionsListRunnerApplicationsForOrgResponse
    {
        // TODO: Implement ActionsListRunnerApplicationsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/secrets/{secret_name}/repositories
     *
     * List selected repositories for an organization secret
     */
    public function actionsListSelectedReposForOrgSecret(
        ActionsListSelectedReposForOrgSecretRequest $request,
        string $org,
        string $secret_name,
    ): ActionsListSelectedReposForOrgSecretResponse
    {
        // TODO: Implement ActionsListSelectedReposForOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/permissions/repositories
     *
     * List selected repositories enabled for GitHub Actions in an organization
     */
    public function actionsListSelectedRepositoriesEnabledGithubActionsOrganization(
        ActionsListSelectedRepositoriesEnabledGithubActionsOrganizationRequest $request,
        string $org,
    ): ActionsListSelectedRepositoriesEnabledGithubActionsOrganizationResponse
    {
        // TODO: Implement ActionsListSelectedRepositoriesEnabledGithubActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runner-groups
     *
     * List self-hosted runner groups for an organization
     */
    public function actionsListSelfHostedRunnerGroupsForOrg(
        ActionsListSelfHostedRunnerGroupsForOrgRequest $request,
        string $org,
    ): ActionsListSelfHostedRunnerGroupsForOrgResponse
    {
        // TODO: Implement ActionsListSelfHostedRunnerGroupsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runners
     *
     * List self-hosted runners for an organization
     */
    public function actionsListSelfHostedRunnersForOrg(
        ActionsListSelfHostedRunnersForOrgRequest $request,
        string $org,
    ): ActionsListSelfHostedRunnersForOrgResponse
    {
        // TODO: Implement ActionsListSelfHostedRunnersForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/actions/runner-groups/{runner_group_id}/runners
     *
     * List self-hosted runners in a group for an organization
     */
    public function actionsListSelfHostedRunnersInGroupForOrg(
        ActionsListSelfHostedRunnersInGroupForOrgRequest $request,
        string $org,
        int $runner_group_id,
    ): ActionsListSelfHostedRunnersInGroupForOrgResponse
    {
        // TODO: Implement ActionsListSelfHostedRunnersInGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}
     *
     * Remove repository access to a self-hosted runner group in an organization
     */
    public function actionsRemoveRepoAccessToSelfHostedRunnerGroupInOrg(
        string $org,
        int $runner_group_id,
        int $repository_id,
    ): ActionsRemoveRepoAccessToSelfHostedRunnerGroupInOrgResponse
    {
        // TODO: Implement ActionsRemoveRepoAccessToSelfHostedRunnerGroupInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}
     *
     * Remove selected repository from an organization secret
     */
    public function actionsRemoveSelectedRepoFromOrgSecret(
        string $org,
        string $secret_name,
        int $repository_id,
    ): ActionsRemoveSelectedRepoFromOrgSecretResponse
    {
        // TODO: Implement ActionsRemoveSelectedRepoFromOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}
     *
     * Remove a self-hosted runner from a group for an organization
     */
    public function actionsRemoveSelfHostedRunnerFromGroupForOrg(
        string $org,
        int $runner_group_id,
        int $runner_id,
    ): ActionsRemoveSelfHostedRunnerFromGroupForOrgResponse
    {
        // TODO: Implement ActionsRemoveSelfHostedRunnerFromGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/permissions/selected-actions
     *
     * Set allowed actions for an organization
     */
    public function actionsSetAllowedActionsOrganization(
        ActionsSetAllowedActionsOrganizationRequest $request,
        string $org,
    ): ActionsSetAllowedActionsOrganizationResponse
    {
        // TODO: Implement ActionsSetAllowedActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/permissions
     *
     * Set GitHub Actions permissions for an organization
     */
    public function actionsSetGithubActionsPermissionsOrganization(
        ActionsSetGithubActionsPermissionsOrganizationRequest $request,
        string $org,
    ): ActionsSetGithubActionsPermissionsOrganizationResponse
    {
        // TODO: Implement ActionsSetGithubActionsPermissionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories
     *
     * Set repository access for a self-hosted runner group in an organization
     */
    public function actionsSetRepoAccessToSelfHostedRunnerGroupInOrg(
        ActionsSetRepoAccessToSelfHostedRunnerGroupInOrgRequest $request,
        string $org,
        int $runner_group_id,
    ): ActionsSetRepoAccessToSelfHostedRunnerGroupInOrgResponse
    {
        // TODO: Implement ActionsSetRepoAccessToSelfHostedRunnerGroupInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/secrets/{secret_name}/repositories
     *
     * Set selected repositories for an organization secret
     */
    public function actionsSetSelectedReposForOrgSecret(
        ActionsSetSelectedReposForOrgSecretRequest $request,
        string $org,
        string $secret_name,
    ): ActionsSetSelectedReposForOrgSecretResponse
    {
        // TODO: Implement ActionsSetSelectedReposForOrgSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/permissions/repositories
     *
     * Set selected repositories enabled for GitHub Actions in an organization
     */
    public function actionsSetSelectedRepositoriesEnabledGithubActionsOrganization(
        ActionsSetSelectedRepositoriesEnabledGithubActionsOrganizationRequest $request,
        string $org,
    ): ActionsSetSelectedRepositoriesEnabledGithubActionsOrganizationResponse
    {
        // TODO: Implement ActionsSetSelectedRepositoriesEnabledGithubActionsOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners
     *
     * Set self-hosted runners in a group for an organization
     */
    public function actionsSetSelfHostedRunnersInGroupForOrg(
        ActionsSetSelfHostedRunnersInGroupForOrgRequest $request,
        string $org,
        int $runner_group_id,
    ): ActionsSetSelfHostedRunnersInGroupForOrgResponse
    {
        // TODO: Implement ActionsSetSelfHostedRunnersInGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}
     *
     * Update a self-hosted runner group for an organization
     */
    public function actionsUpdateSelfHostedRunnerGroupForOrg(
        ActionsUpdateSelfHostedRunnerGroupForOrgRequest $request,
        string $org,
        int $runner_group_id,
    ): ActionsUpdateSelfHostedRunnerGroupForOrgResponse
    {
        // TODO: Implement ActionsUpdateSelfHostedRunnerGroupForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/events
     *
     * List public organization events
     */
    public function activityListPublicOrgEvents(
        ActivityListPublicOrgEventsRequest $request,
        string $org,
    ): ActivityListPublicOrgEventsResponse
    {
        // TODO: Implement ActivityListPublicOrgEvents
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/settings/billing/actions
     *
     * Get GitHub Actions billing for an organization
     */
    public function billingGetGithubActionsBillingOrg(
        string $org,
    ): BillingGetGithubActionsBillingOrgResponse
    {
        // TODO: Implement BillingGetGithubActionsBillingOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/settings/billing/packages
     *
     * Get GitHub Packages billing for an organization
     */
    public function billingGetGithubPackagesBillingOrg(
        string $org,
    ): BillingGetGithubPackagesBillingOrgResponse
    {
        // TODO: Implement BillingGetGithubPackagesBillingOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/settings/billing/shared-storage
     *
     * Get shared storage billing for an organization
     */
    public function billingGetSharedStorageBillingOrg(
        string $org,
    ): BillingGetSharedStorageBillingOrgResponse
    {
        // TODO: Implement BillingGetSharedStorageBillingOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/interaction-limits
     *
     * Remove interaction restrictions for an organization
     */
    public function interactionsRemoveRestrictionsForOrg(
        string $org,
    ): InteractionsRemoveRestrictionsForOrgResponse
    {
        // TODO: Implement InteractionsRemoveRestrictionsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/interaction-limits
     *
     * Set interaction restrictions for an organization
     */
    public function interactionsSetRestrictionsForOrg(
        InteractionsSetRestrictionsForOrgRequest $request,
        string $org,
    ): InteractionsSetRestrictionsForOrgResponse
    {
        // TODO: Implement InteractionsSetRestrictionsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/issues
     *
     * List organization issues assigned to the authenticated user
     */
    public function issuesListForOrg(
        IssuesListForOrgRequest $request,
        string $org,
    ): IssuesListForOrgResponse
    {
        // TODO: Implement IssuesListForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/migrations/{migration_id}/archive
     *
     * Delete an organization migration archive
     */
    public function migrationsDeleteArchiveForOrg(
        string $org,
        int $migration_id,
    ): MigrationsDeleteArchiveForOrgResponse
    {
        // TODO: Implement MigrationsDeleteArchiveForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/migrations/{migration_id}/archive
     *
     * Download an organization migration archive
     */
    public function migrationsDownloadArchiveForOrg(
        string $org,
        int $migration_id,
    ): void
    {
        // TODO: Implement MigrationsDownloadArchiveForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/migrations/{migration_id}
     *
     * Get an organization migration status
     */
    public function migrationsGetStatusForOrg(
        MigrationsGetStatusForOrgRequest $request,
        string $org,
        int $migration_id,
    ): MigrationsGetStatusForOrgResponse
    {
        // TODO: Implement MigrationsGetStatusForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/migrations
     *
     * List organization migrations
     */
    public function migrationsListForOrg(
        MigrationsListForOrgRequest $request,
        string $org,
    ): MigrationsListForOrgResponse
    {
        // TODO: Implement MigrationsListForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/migrations/{migration_id}/repositories
     *
     * List repositories in an organization migration
     */
    public function migrationsListReposForOrg(
        MigrationsListReposForOrgRequest $request,
        string $org,
        int $migration_id,
    ): MigrationsListReposForOrgResponse
    {
        // TODO: Implement MigrationsListReposForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/migrations
     *
     * Start an organization migration
     */
    public function migrationsStartForOrg(
        MigrationsStartForOrgRequest $request,
        string $org,
    ): MigrationsStartForOrgResponse
    {
        // TODO: Implement MigrationsStartForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock
     *
     * Unlock an organization repository
     */
    public function migrationsUnlockRepoForOrg(
        string $org,
        int $migration_id,
        string $repo_name,
    ): MigrationsUnlockRepoForOrgResponse
    {
        // TODO: Implement MigrationsUnlockRepoForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/blocks/{username}
     *
     * Block a user from an organization
     */
    public function orgsBlockUser(
        string $org,
        string $username,
    ): OrgsBlockUserResponse
    {
        // TODO: Implement OrgsBlockUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/invitations/{invitation_id}
     *
     * Cancel an organization invitation
     */
    public function orgsCancelInvitation(
        string $org,
        int $invitation_id,
    ): OrgsCancelInvitationResponse
    {
        // TODO: Implement OrgsCancelInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/blocks/{username}
     *
     * Check if a user is blocked by an organization
     */
    public function orgsCheckBlockedUser(
        string $org,
        string $username,
    ): OrgsCheckBlockedUserResponse
    {
        // TODO: Implement OrgsCheckBlockedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/members/{username}
     *
     * Check organization membership for a user
     */
    public function orgsCheckMembershipForUser(
        string $org,
        string $username,
    ): OrgsCheckMembershipForUserResponse
    {
        // TODO: Implement OrgsCheckMembershipForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/public_members/{username}
     *
     * Check public organization membership for a user
     */
    public function orgsCheckPublicMembershipForUser(
        string $org,
        string $username,
    ): OrgsCheckPublicMembershipForUserResponse
    {
        // TODO: Implement OrgsCheckPublicMembershipForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/outside_collaborators/{username}
     *
     * Convert an organization member to outside collaborator
     */
    public function orgsConvertMemberToOutsideCollaborator(
        string $org,
        string $username,
    ): OrgsConvertMemberToOutsideCollaboratorResponse
    {
        // TODO: Implement OrgsConvertMemberToOutsideCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/invitations
     *
     * Create an organization invitation
     */
    public function orgsCreateInvitation(
        OrgsCreateInvitationRequest $request,
        string $org,
    ): OrgsCreateInvitationResponse
    {
        // TODO: Implement OrgsCreateInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/hooks
     *
     * Create an organization webhook
     */
    public function orgsCreateWebhook(
        OrgsCreateWebhookRequest $request,
        string $org,
    ): OrgsCreateWebhookResponse
    {
        // TODO: Implement OrgsCreateWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/hooks/{hook_id}
     *
     * Delete an organization webhook
     */
    public function orgsDeleteWebhook(
        string $org,
        int $hook_id,
    ): OrgsDeleteWebhookResponse
    {
        // TODO: Implement OrgsDeleteWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}
     *
     * Get an organization
     */
    public function orgsGet(
        string $org,
    ): OrgsGetResponse
    {
        // TODO: Implement OrgsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/audit-log
     *
     * Get the audit log for an organization
     */
    public function orgsGetAuditLog(
        OrgsGetAuditLogRequest $request,
        string $org,
    ): OrgsGetAuditLogResponse
    {
        // TODO: Implement OrgsGetAuditLog
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/memberships/{username}
     *
     * Get organization membership for a user
     */
    public function orgsGetMembershipForUser(
        string $org,
        string $username,
    ): OrgsGetMembershipForUserResponse
    {
        // TODO: Implement OrgsGetMembershipForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/hooks/{hook_id}
     *
     * Get an organization webhook
     */
    public function orgsGetWebhook(
        string $org,
        int $hook_id,
    ): OrgsGetWebhookResponse
    {
        // TODO: Implement OrgsGetWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/hooks/{hook_id}/config
     *
     * Get a webhook configuration for an organization
     */
    public function orgsGetWebhookConfigForOrg(
        string $org,
        int $hook_id,
    ): OrgsGetWebhookConfigForOrgResponse
    {
        // TODO: Implement OrgsGetWebhookConfigForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}
     *
     * Get a webhook delivery for an organization webhook
     */
    public function orgsGetWebhookDelivery(
        string $org,
        int $hook_id,
        int $delivery_id,
    ): OrgsGetWebhookDeliveryResponse
    {
        // TODO: Implement OrgsGetWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/blocks
     *
     * List users blocked by an organization
     */
    public function orgsListBlockedUsers(
        string $org,
    ): OrgsListBlockedUsersResponse
    {
        // TODO: Implement OrgsListBlockedUsers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/failed_invitations
     *
     * List failed organization invitations
     */
    public function orgsListFailedInvitations(
        OrgsListFailedInvitationsRequest $request,
        string $org,
    ): OrgsListFailedInvitationsResponse
    {
        // TODO: Implement OrgsListFailedInvitations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/invitations/{invitation_id}/teams
     *
     * List organization invitation teams
     */
    public function orgsListInvitationTeams(
        OrgsListInvitationTeamsRequest $request,
        string $org,
        int $invitation_id,
    ): OrgsListInvitationTeamsResponse
    {
        // TODO: Implement OrgsListInvitationTeams
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/members
     *
     * List organization members
     */
    public function orgsListMembers(
        OrgsListMembersRequest $request,
        string $org,
    ): OrgsListMembersResponse
    {
        // TODO: Implement OrgsListMembers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/outside_collaborators
     *
     * List outside collaborators for an organization
     */
    public function orgsListOutsideCollaborators(
        OrgsListOutsideCollaboratorsRequest $request,
        string $org,
    ): OrgsListOutsideCollaboratorsResponse
    {
        // TODO: Implement OrgsListOutsideCollaborators
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/invitations
     *
     * List pending organization invitations
     */
    public function orgsListPendingInvitations(
        OrgsListPendingInvitationsRequest $request,
        string $org,
    ): OrgsListPendingInvitationsResponse
    {
        // TODO: Implement OrgsListPendingInvitations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/public_members
     *
     * List public organization members
     */
    public function orgsListPublicMembers(
        OrgsListPublicMembersRequest $request,
        string $org,
    ): OrgsListPublicMembersResponse
    {
        // TODO: Implement OrgsListPublicMembers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/credential-authorizations
     *
     * List SAML SSO authorizations for an organization
     */
    public function orgsListSamlSsoAuthorizations(
        string $org,
    ): OrgsListSamlSsoAuthorizationsResponse
    {
        // TODO: Implement OrgsListSamlSsoAuthorizations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/hooks/{hook_id}/deliveries
     *
     * List deliveries for an organization webhook
     */
    public function orgsListWebhookDeliveries(
        OrgsListWebhookDeliveriesRequest $request,
        string $org,
        int $hook_id,
    ): OrgsListWebhookDeliveriesResponse
    {
        // TODO: Implement OrgsListWebhookDeliveries
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/hooks
     *
     * List organization webhooks
     */
    public function orgsListWebhooks(
        OrgsListWebhooksRequest $request,
        string $org,
    ): OrgsListWebhooksResponse
    {
        // TODO: Implement OrgsListWebhooks
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/hooks/{hook_id}/pings
     *
     * Ping an organization webhook
     */
    public function orgsPingWebhook(
        string $org,
        int $hook_id,
    ): OrgsPingWebhookResponse
    {
        // TODO: Implement OrgsPingWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts
     *
     * Redeliver a delivery for an organization webhook
     */
    public function orgsRedeliverWebhookDelivery(
        string $org,
        int $hook_id,
        int $delivery_id,
    ): OrgsRedeliverWebhookDeliveryResponse
    {
        // TODO: Implement OrgsRedeliverWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/members/{username}
     *
     * Remove an organization member
     */
    public function orgsRemoveMember(
        string $org,
        string $username,
    ): OrgsRemoveMemberResponse
    {
        // TODO: Implement OrgsRemoveMember
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/memberships/{username}
     *
     * Remove organization membership for a user
     */
    public function orgsRemoveMembershipForUser(
        string $org,
        string $username,
    ): OrgsRemoveMembershipForUserResponse
    {
        // TODO: Implement OrgsRemoveMembershipForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/outside_collaborators/{username}
     *
     * Remove outside collaborator from an organization
     */
    public function orgsRemoveOutsideCollaborator(
        string $org,
        string $username,
    ): OrgsRemoveOutsideCollaboratorResponse
    {
        // TODO: Implement OrgsRemoveOutsideCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/public_members/{username}
     *
     * Remove public organization membership for the authenticated user
     */
    public function orgsRemovePublicMembershipForAuthenticatedUser(
        string $org,
        string $username,
    ): OrgsRemovePublicMembershipForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsRemovePublicMembershipForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/credential-authorizations/{credential_id}
     *
     * Remove a SAML SSO authorization for an organization
     */
    public function orgsRemoveSamlSsoAuthorization(
        string $org,
        int $credential_id,
    ): OrgsRemoveSamlSsoAuthorizationResponse
    {
        // TODO: Implement OrgsRemoveSamlSsoAuthorization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/memberships/{username}
     *
     * Set organization membership for a user
     */
    public function orgsSetMembershipForUser(
        OrgsSetMembershipForUserRequest $request,
        string $org,
        string $username,
    ): OrgsSetMembershipForUserResponse
    {
        // TODO: Implement OrgsSetMembershipForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/public_members/{username}
     *
     * Set public organization membership for the authenticated user
     */
    public function orgsSetPublicMembershipForAuthenticatedUser(
        string $org,
        string $username,
    ): OrgsSetPublicMembershipForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsSetPublicMembershipForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/blocks/{username}
     *
     * Unblock a user from an organization
     */
    public function orgsUnblockUser(
        string $org,
        string $username,
    ): OrgsUnblockUserResponse
    {
        // TODO: Implement OrgsUnblockUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/hooks/{hook_id}
     *
     * Update an organization webhook
     */
    public function orgsUpdateWebhook(
        OrgsUpdateWebhookRequest $request,
        string $org,
        int $hook_id,
    ): OrgsUpdateWebhookResponse
    {
        // TODO: Implement OrgsUpdateWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/hooks/{hook_id}/config
     *
     * Update a webhook configuration for an organization
     */
    public function orgsUpdateWebhookConfigForOrg(
        OrgsUpdateWebhookConfigForOrgRequest $request,
        string $org,
        int $hook_id,
    ): OrgsUpdateWebhookConfigForOrgResponse
    {
        // TODO: Implement OrgsUpdateWebhookConfigForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/packages/{package_type}/{package_name}
     *
     * Delete a package for an organization
     */
    public function packagesDeletePackageForOrg(
        PackageType $package_type,
        string $package_name,
        string $org,
    ): PackagesDeletePackageForOrgResponse
    {
        // TODO: Implement PackagesDeletePackageForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Delete package version for an organization
     */
    public function packagesDeletePackageVersionForOrg(
        PackageType $package_type,
        string $package_name,
        string $org,
        int $package_version_id,
    ): PackagesDeletePackageVersionForOrgResponse
    {
        // TODO: Implement PackagesDeletePackageVersionForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/packages/{package_type}/{package_name}/versions
     *
     * Get all package versions for a package owned by an organization
     */
    public function packagesGetAllPackageVersionsForPackageOwnedByOrg(
        PackagesGetAllPackageVersionsForPackageOwnedByOrgRequest $request,
        PackageType $package_type,
        string $package_name,
        string $org,
    ): PackagesGetAllPackageVersionsForPackageOwnedByOrgResponse
    {
        // TODO: Implement PackagesGetAllPackageVersionsForPackageOwnedByOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/packages/{package_type}/{package_name}
     *
     * Get a package for an organization
     */
    public function packagesGetPackageForOrganization(
        PackageType $package_type,
        string $package_name,
        string $org,
    ): PackagesGetPackageForOrganizationResponse
    {
        // TODO: Implement PackagesGetPackageForOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Get a package version for an organization
     */
    public function packagesGetPackageVersionForOrganization(
        PackageType $package_type,
        string $package_name,
        string $org,
        int $package_version_id,
    ): PackagesGetPackageVersionForOrganizationResponse
    {
        // TODO: Implement PackagesGetPackageVersionForOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/packages
     *
     * List packages for an organization
     */
    public function packagesListPackagesForOrganization(
        PackagesListPackagesForOrganizationRequest $request,
        string $org,
    ): PackagesListPackagesForOrganizationResponse
    {
        // TODO: Implement PackagesListPackagesForOrganization
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/packages/{package_type}/{package_name}/restore
     *
     * Restore a package for an organization
     */
    public function packagesRestorePackageForOrg(
        PackagesRestorePackageForOrgRequest $request,
        PackageType $package_type,
        string $package_name,
        string $org,
    ): PackagesRestorePackageForOrgResponse
    {
        // TODO: Implement PackagesRestorePackageForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore
     *
     * Restore package version for an organization
     */
    public function packagesRestorePackageVersionForOrg(
        PackageType $package_type,
        string $package_name,
        string $org,
        int $package_version_id,
    ): PackagesRestorePackageVersionForOrgResponse
    {
        // TODO: Implement PackagesRestorePackageVersionForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/projects
     *
     * Create an organization project
     */
    public function projectsCreateForOrg(
        ProjectsCreateForOrgRequest $request,
        string $org,
    ): ProjectsCreateForOrgResponse
    {
        // TODO: Implement ProjectsCreateForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/projects
     *
     * List organization projects
     */
    public function projectsListForOrg(
        ProjectsListForOrgRequest $request,
        string $org,
    ): ProjectsListForOrgResponse
    {
        // TODO: Implement ProjectsListForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions
     *
     * Create reaction for a team discussion comment
     */
    public function reactionsCreateForTeamDiscussionCommentInOrg(
        ReactionsCreateForTeamDiscussionCommentInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
    ): ReactionsCreateForTeamDiscussionCommentInOrgResponse
    {
        // TODO: Implement ReactionsCreateForTeamDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions
     *
     * Create reaction for a team discussion
     */
    public function reactionsCreateForTeamDiscussionInOrg(
        ReactionsCreateForTeamDiscussionInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
    ): ReactionsCreateForTeamDiscussionInOrgResponse
    {
        // TODO: Implement ReactionsCreateForTeamDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}
     *
     * Delete team discussion reaction
     */
    public function reactionsDeleteForTeamDiscussion(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $reaction_id,
    ): ReactionsDeleteForTeamDiscussionResponse
    {
        // TODO: Implement ReactionsDeleteForTeamDiscussion
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}
     *
     * Delete team discussion comment reaction
     */
    public function reactionsDeleteForTeamDiscussionComment(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
        int $reaction_id,
    ): ReactionsDeleteForTeamDiscussionCommentResponse
    {
        // TODO: Implement ReactionsDeleteForTeamDiscussionComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions
     *
     * List reactions for a team discussion comment
     */
    public function reactionsListForTeamDiscussionCommentInOrg(
        ReactionsListForTeamDiscussionCommentInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
    ): ReactionsListForTeamDiscussionCommentInOrgResponse
    {
        // TODO: Implement ReactionsListForTeamDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions
     *
     * List reactions for a team discussion
     */
    public function reactionsListForTeamDiscussionInOrg(
        ReactionsListForTeamDiscussionInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
    ): ReactionsListForTeamDiscussionInOrgResponse
    {
        // TODO: Implement ReactionsListForTeamDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/repos
     *
     * Create an organization repository
     */
    public function reposCreateInOrg(
        ReposCreateInOrgRequest $request,
        string $org,
    ): ReposCreateInOrgResponse
    {
        // TODO: Implement ReposCreateInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/repos
     *
     * List organization repositories
     */
    public function reposListForOrg(
        ReposListForOrgRequest $request,
        string $org,
    ): ReposListForOrgResponse
    {
        // TODO: Implement ReposListForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/secret-scanning/alerts
     *
     * List secret scanning alerts by organization
     */
    public function secretScanningListAlertsForOrg(
        SecretScanningListAlertsForOrgRequest $request,
        string $org,
    ): SecretScanningListAlertsForOrgResponse
    {
        // TODO: Implement SecretScanningListAlertsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/teams/{team_slug}/memberships/{username}
     *
     * Add or update team membership for a user
     */
    public function teamsAddOrUpdateMembershipForUserInOrg(
        TeamsAddOrUpdateMembershipForUserInOrgRequest $request,
        string $org,
        string $team_slug,
        string $username,
    ): TeamsAddOrUpdateMembershipForUserInOrgResponse
    {
        // TODO: Implement TeamsAddOrUpdateMembershipForUserInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}
     *
     * Add or update team project permissions
     */
    public function teamsAddOrUpdateProjectPermissionsInOrg(
        TeamsAddOrUpdateProjectPermissionsInOrgRequest $request,
        string $org,
        string $team_slug,
        int $project_id,
    ): TeamsAddOrUpdateProjectPermissionsInOrgResponse
    {
        // TODO: Implement TeamsAddOrUpdateProjectPermissionsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}
     *
     * Add or update team repository permissions
     */
    public function teamsAddOrUpdateRepoPermissionsInOrg(
        TeamsAddOrUpdateRepoPermissionsInOrgRequest $request,
        string $org,
        string $team_slug,
        string $owner,
        string $repo,
    ): TeamsAddOrUpdateRepoPermissionsInOrgResponse
    {
        // TODO: Implement TeamsAddOrUpdateRepoPermissionsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/projects/{project_id}
     *
     * Check team permissions for a project
     */
    public function teamsCheckPermissionsForProjectInOrg(
        string $org,
        string $team_slug,
        int $project_id,
    ): TeamsCheckPermissionsForProjectInOrgResponse
    {
        // TODO: Implement TeamsCheckPermissionsForProjectInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}
     *
     * Check team permissions for a repository
     */
    public function teamsCheckPermissionsForRepoInOrg(
        string $org,
        string $team_slug,
        string $owner,
        string $repo,
    ): TeamsCheckPermissionsForRepoInOrgResponse
    {
        // TODO: Implement TeamsCheckPermissionsForRepoInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/teams
     *
     * Create a team
     */
    public function teamsCreate(
        TeamsCreateRequest $request,
        string $org,
    ): TeamsCreateResponse
    {
        // TODO: Implement TeamsCreate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments
     *
     * Create a discussion comment
     */
    public function teamsCreateDiscussionCommentInOrg(
        TeamsCreateDiscussionCommentInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
    ): TeamsCreateDiscussionCommentInOrgResponse
    {
        // TODO: Implement TeamsCreateDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orgs/{org}/teams/{team_slug}/discussions
     *
     * Create a discussion
     */
    public function teamsCreateDiscussionInOrg(
        TeamsCreateDiscussionInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsCreateDiscussionInOrgResponse
    {
        // TODO: Implement TeamsCreateDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/teams/{team_slug}/team-sync/group-mappings
     *
     * Create or update IdP group connections
     */
    public function teamsCreateOrUpdateIdpGroupConnectionsInOrg(
        TeamsCreateOrUpdateIdpGroupConnectionsInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsCreateOrUpdateIdpGroupConnectionsInOrgResponse
    {
        // TODO: Implement TeamsCreateOrUpdateIdpGroupConnectionsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Delete a discussion comment
     */
    public function teamsDeleteDiscussionCommentInOrg(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
    ): TeamsDeleteDiscussionCommentInOrgResponse
    {
        // TODO: Implement TeamsDeleteDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}
     *
     * Delete a discussion
     */
    public function teamsDeleteDiscussionInOrg(
        string $org,
        string $team_slug,
        int $discussion_number,
    ): TeamsDeleteDiscussionInOrgResponse
    {
        // TODO: Implement TeamsDeleteDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}
     *
     * Delete a team
     */
    public function teamsDeleteInOrg(
        string $org,
        string $team_slug,
    ): TeamsDeleteInOrgResponse
    {
        // TODO: Implement TeamsDeleteInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}
     *
     * Get a team by name
     */
    public function teamsGetByName(
        string $org,
        string $team_slug,
    ): TeamsGetByNameResponse
    {
        // TODO: Implement TeamsGetByName
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Get a discussion comment
     */
    public function teamsGetDiscussionCommentInOrg(
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
    ): TeamsGetDiscussionCommentInOrgResponse
    {
        // TODO: Implement TeamsGetDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}
     *
     * Get a discussion
     */
    public function teamsGetDiscussionInOrg(
        string $org,
        string $team_slug,
        int $discussion_number,
    ): TeamsGetDiscussionInOrgResponse
    {
        // TODO: Implement TeamsGetDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/memberships/{username}
     *
     * Get team membership for a user
     */
    public function teamsGetMembershipForUserInOrg(
        string $org,
        string $team_slug,
        string $username,
    ): TeamsGetMembershipForUserInOrgResponse
    {
        // TODO: Implement TeamsGetMembershipForUserInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams
     *
     * List teams
     */
    public function teamsList(
        TeamsListRequest $request,
        string $org,
    ): TeamsListResponse
    {
        // TODO: Implement TeamsList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/teams
     *
     * List child teams
     */
    public function teamsListChildInOrg(
        TeamsListChildInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListChildInOrgResponse
    {
        // TODO: Implement TeamsListChildInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments
     *
     * List discussion comments
     */
    public function teamsListDiscussionCommentsInOrg(
        TeamsListDiscussionCommentsInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
    ): TeamsListDiscussionCommentsInOrgResponse
    {
        // TODO: Implement TeamsListDiscussionCommentsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/discussions
     *
     * List discussions
     */
    public function teamsListDiscussionsInOrg(
        TeamsListDiscussionsInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListDiscussionsInOrgResponse
    {
        // TODO: Implement TeamsListDiscussionsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/team-sync/groups
     *
     * List IdP groups for an organization
     */
    public function teamsListIdpGroupsForOrg(
        TeamsListIdpGroupsForOrgRequest $request,
        string $org,
    ): TeamsListIdpGroupsForOrgResponse
    {
        // TODO: Implement TeamsListIdpGroupsForOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/team-sync/group-mappings
     *
     * List IdP groups for a team
     */
    public function teamsListIdpGroupsInOrg(
        string $org,
        string $team_slug,
    ): TeamsListIdpGroupsInOrgResponse
    {
        // TODO: Implement TeamsListIdpGroupsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/members
     *
     * List team members
     */
    public function teamsListMembersInOrg(
        TeamsListMembersInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListMembersInOrgResponse
    {
        // TODO: Implement TeamsListMembersInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/invitations
     *
     * List pending team invitations
     */
    public function teamsListPendingInvitationsInOrg(
        TeamsListPendingInvitationsInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListPendingInvitationsInOrgResponse
    {
        // TODO: Implement TeamsListPendingInvitationsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/projects
     *
     * List team projects
     */
    public function teamsListProjectsInOrg(
        TeamsListProjectsInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListProjectsInOrgResponse
    {
        // TODO: Implement TeamsListProjectsInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orgs/{org}/teams/{team_slug}/repos
     *
     * List team repositories
     */
    public function teamsListReposInOrg(
        TeamsListReposInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsListReposInOrgResponse
    {
        // TODO: Implement TeamsListReposInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}
     *
     * Remove team membership for a user
     */
    public function teamsRemoveMembershipForUserInOrg(
        string $org,
        string $team_slug,
        string $username,
    ): TeamsRemoveMembershipForUserInOrgResponse
    {
        // TODO: Implement TeamsRemoveMembershipForUserInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}
     *
     * Remove a project from a team
     */
    public function teamsRemoveProjectInOrg(
        string $org,
        string $team_slug,
        int $project_id,
    ): TeamsRemoveProjectInOrgResponse
    {
        // TODO: Implement TeamsRemoveProjectInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}
     *
     * Remove a repository from a team
     */
    public function teamsRemoveRepoInOrg(
        string $org,
        string $team_slug,
        string $owner,
        string $repo,
    ): TeamsRemoveRepoInOrgResponse
    {
        // TODO: Implement TeamsRemoveRepoInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Update a discussion comment
     */
    public function teamsUpdateDiscussionCommentInOrg(
        TeamsUpdateDiscussionCommentInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
        int $comment_number,
    ): TeamsUpdateDiscussionCommentInOrgResponse
    {
        // TODO: Implement TeamsUpdateDiscussionCommentInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}
     *
     * Update a discussion
     */
    public function teamsUpdateDiscussionInOrg(
        TeamsUpdateDiscussionInOrgRequest $request,
        string $org,
        string $team_slug,
        int $discussion_number,
    ): TeamsUpdateDiscussionInOrgResponse
    {
        // TODO: Implement TeamsUpdateDiscussionInOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /orgs/{org}/teams/{team_slug}
     *
     * Update a team
     */
    public function teamsUpdateInOrg(
        TeamsUpdateInOrgRequest $request,
        string $org,
        string $team_slug,
    ): TeamsUpdateInOrgResponse
    {
        // TODO: Implement TeamsUpdateInOrg
        throw new \BadMethodCallException('Not implemented');
    }
}
