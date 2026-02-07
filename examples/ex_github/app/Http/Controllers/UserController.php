<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UserController as BaseUserController;
use App\Http\Requests\ActivityListEventsForAuthenticatedUserRequest;
use App\Http\Requests\ActivityListOrgEventsForAuthenticatedUserRequest;
use App\Http\Requests\ActivityListPublicEventsForUserRequest;
use App\Http\Requests\ActivityListReceivedEventsForUserRequest;
use App\Http\Requests\ActivityListReceivedPublicEventsForUserRequest;
use App\Http\Requests\ActivityListReposStarredByAuthenticatedUserRequest;
use App\Http\Requests\ActivityListReposWatchedByUserRequest;
use App\Http\Requests\ActivityListWatchedReposForAuthenticatedUserRequest;
use App\Http\Requests\AppsListInstallationReposForAuthenticatedUserRequest;
use App\Http\Requests\AppsListSubscriptionsForAuthenticatedUserRequest;
use App\Http\Requests\AppsListSubscriptionsForAuthenticatedUserStubbedRequest;
use App\Http\Requests\GistsListForUserRequest;
use App\Http\Requests\InteractionsSetRestrictionsForAuthenticatedUserRequest;
use App\Http\Requests\IssuesListForAuthenticatedUserRequest;
use App\Http\Requests\MigrationsGetStatusForAuthenticatedUserRequest;
use App\Http\Requests\MigrationsListForAuthenticatedUserRequest;
use App\Http\Requests\MigrationsListReposForUserRequest;
use App\Http\Requests\MigrationsStartForAuthenticatedUserRequest;
use App\Http\Requests\OrgsListForAuthenticatedUserRequest;
use App\Http\Requests\OrgsListForUserRequest;
use App\Http\Requests\OrgsListMembershipsForAuthenticatedUserRequest;
use App\Http\Requests\OrgsUpdateMembershipForAuthenticatedUserRequest;
use App\Http\Requests\PackagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUserRequest;
use App\Http\Requests\PackagesListPackagesForAuthenticatedUserRequest;
use App\Http\Requests\PackagesListPackagesForUserRequest;
use App\Http\Requests\PackagesRestorePackageForAuthenticatedUserRequest;
use App\Http\Requests\PackagesRestorePackageForUserRequest;
use App\Http\Requests\ProjectsCreateForAuthenticatedUserRequest;
use App\Http\Requests\ProjectsListForUserRequest;
use App\Http\Requests\ReposCreateForAuthenticatedUserRequest;
use App\Http\Requests\ReposListForAuthenticatedUserRequest;
use App\Http\Requests\ReposListForUserRequest;
use App\Http\Requests\ReposListInvitationsForAuthenticatedUserRequest;
use App\Http\Requests\TeamsListForAuthenticatedUserRequest;
use App\Http\Requests\UsersAddEmailForAuthenticatedRequest;
use App\Http\Requests\UsersCreateGpgKeyForAuthenticatedRequest;
use App\Http\Requests\UsersCreatePublicSshKeyForAuthenticatedRequest;
use App\Http\Requests\UsersDeleteEmailForAuthenticatedRequest;
use App\Http\Requests\UsersGetContextForUserRequest;
use App\Http\Requests\UsersListRequest;
use App\Http\Requests\UsersListEmailsForAuthenticatedRequest;
use App\Http\Requests\UsersListFollowedByAuthenticatedRequest;
use App\Http\Requests\UsersListFollowersForAuthenticatedUserRequest;
use App\Http\Requests\UsersListFollowersForUserRequest;
use App\Http\Requests\UsersListFollowingForUserRequest;
use App\Http\Requests\UsersListGpgKeysForAuthenticatedRequest;
use App\Http\Requests\UsersListGpgKeysForUserRequest;
use App\Http\Requests\UsersListPublicEmailsForAuthenticatedRequest;
use App\Http\Requests\UsersListPublicKeysForUserRequest;
use App\Http\Requests\UsersListPublicSshKeysForAuthenticatedRequest;
use App\Http\Requests\UsersSetPrimaryEmailVisibilityForAuthenticatedRequest;
use App\Http\Requests\UsersUpdateAuthenticatedRequest;
use App\Http\Responses\OpenApi\ActivityCheckRepoIsStarredByAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListEventsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListOrgEventsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListPublicEventsForUserResponse;
use App\Http\Responses\OpenApi\ActivityListReceivedEventsForUserResponse;
use App\Http\Responses\OpenApi\ActivityListReceivedPublicEventsForUserResponse;
use App\Http\Responses\OpenApi\ActivityListReposStarredByAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListReposWatchedByUserResponse;
use App\Http\Responses\OpenApi\ActivityListWatchedReposForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityStarRepoForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityUnstarRepoForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\AppsAddRepoToInstallationResponse;
use App\Http\Responses\OpenApi\AppsListInstallationReposForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\AppsListSubscriptionsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\AppsListSubscriptionsForAuthenticatedUserStubbedResponse;
use App\Http\Responses\OpenApi\AppsRemoveRepoFromInstallationResponse;
use App\Http\Responses\OpenApi\BillingGetGithubActionsBillingUserResponse;
use App\Http\Responses\OpenApi\BillingGetGithubPackagesBillingUserResponse;
use App\Http\Responses\OpenApi\BillingGetSharedStorageBillingUserResponse;
use App\Http\Responses\OpenApi\GistsListForUserResponse;
use App\Http\Responses\OpenApi\InteractionsRemoveRestrictionsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\InteractionsSetRestrictionsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\IssuesListForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\MigrationsDeleteArchiveForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\MigrationsGetStatusForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\MigrationsListForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\MigrationsListReposForUserResponse;
use App\Http\Responses\OpenApi\MigrationsStartForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\MigrationsUnlockRepoForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsGetMembershipForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsListForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsListForUserResponse;
use App\Http\Responses\OpenApi\OrgsListMembershipsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\OrgsUpdateMembershipForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageForUserResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageVersionForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesDeletePackageVersionForUserResponse;
use App\Http\Responses\OpenApi\PackagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesGetAllPackageVersionsForPackageOwnedByUserResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageForUserResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageVersionForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesGetPackageVersionForUserResponse;
use App\Http\Responses\OpenApi\PackagesListPackagesForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesListPackagesForUserResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageForUserResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageVersionForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\PackagesRestorePackageVersionForUserResponse;
use App\Http\Responses\OpenApi\ProjectsCreateForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ProjectsListForUserResponse;
use App\Http\Responses\OpenApi\ReposAcceptInvitationResponse;
use App\Http\Responses\OpenApi\ReposCreateForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ReposDeclineInvitationResponse;
use App\Http\Responses\OpenApi\ReposListForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ReposListForUserResponse;
use App\Http\Responses\OpenApi\ReposListInvitationsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\TeamsListForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\UsersAddEmailForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersBlockResponse;
use App\Http\Responses\OpenApi\UsersCheckBlockedResponse;
use App\Http\Responses\OpenApi\UsersCheckFollowingForUserResponse;
use App\Http\Responses\OpenApi\UsersCheckPersonIsFollowedByAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersCreateGpgKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersCreatePublicSshKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersDeleteEmailForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersDeleteGpgKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersDeletePublicSshKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersFollowResponse;
use App\Http\Responses\OpenApi\UsersGetAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersGetByUsernameResponse;
use App\Http\Responses\OpenApi\UsersGetContextForUserResponse;
use App\Http\Responses\OpenApi\UsersGetGpgKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersGetPublicSshKeyForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListBlockedByAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListEmailsForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListFollowedByAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListFollowersForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\UsersListFollowersForUserResponse;
use App\Http\Responses\OpenApi\UsersListFollowingForUserResponse;
use App\Http\Responses\OpenApi\UsersListGpgKeysForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListGpgKeysForUserResponse;
use App\Http\Responses\OpenApi\UsersListPublicEmailsForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListPublicKeysForUserResponse;
use App\Http\Responses\OpenApi\UsersListPublicSshKeysForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersListResponse;
use App\Http\Responses\OpenApi\UsersSetPrimaryEmailVisibilityForAuthenticatedResponse;
use App\Http\Responses\OpenApi\UsersUnblockResponse;
use App\Http\Responses\OpenApi\UsersUnfollowResponse;
use App\Http\Responses\OpenApi\UsersUpdateAuthenticatedResponse;

final class UserController extends BaseUserController
{
    /**
     * GET /user/starred/{owner}/{repo}
     *
     * Check if a repository is starred by the authenticated user
     */
    public function activityCheckRepoIsStarredByAuthenticatedUser(
        string $owner,
        string $repo,
    ): ActivityCheckRepoIsStarredByAuthenticatedUserResponse
    {
        // TODO: Implement ActivityCheckRepoIsStarredByAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/events
     *
     * List events for the authenticated user
     */
    public function activityListEventsForAuthenticatedUser(
        ActivityListEventsForAuthenticatedUserRequest $request,
        string $username,
    ): ActivityListEventsForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListEventsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/events/orgs/{org}
     *
     * List organization events for the authenticated user
     */
    public function activityListOrgEventsForAuthenticatedUser(
        ActivityListOrgEventsForAuthenticatedUserRequest $request,
        string $username,
        string $org,
    ): ActivityListOrgEventsForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListOrgEventsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/events/public
     *
     * List public events for a user
     */
    public function activityListPublicEventsForUser(
        ActivityListPublicEventsForUserRequest $request,
        string $username,
    ): ActivityListPublicEventsForUserResponse
    {
        // TODO: Implement ActivityListPublicEventsForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/received_events
     *
     * List events received by the authenticated user
     */
    public function activityListReceivedEventsForUser(
        ActivityListReceivedEventsForUserRequest $request,
        string $username,
    ): ActivityListReceivedEventsForUserResponse
    {
        // TODO: Implement ActivityListReceivedEventsForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/received_events/public
     *
     * List public events received by a user
     */
    public function activityListReceivedPublicEventsForUser(
        ActivityListReceivedPublicEventsForUserRequest $request,
        string $username,
    ): ActivityListReceivedPublicEventsForUserResponse
    {
        // TODO: Implement ActivityListReceivedPublicEventsForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/starred
     *
     * List repositories starred by the authenticated user
     */
    public function activityListReposStarredByAuthenticatedUser(
        ActivityListReposStarredByAuthenticatedUserRequest $request,
    ): ActivityListReposStarredByAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListReposStarredByAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/subscriptions
     *
     * List repositories watched by a user
     */
    public function activityListReposWatchedByUser(
        ActivityListReposWatchedByUserRequest $request,
        string $username,
    ): ActivityListReposWatchedByUserResponse
    {
        // TODO: Implement ActivityListReposWatchedByUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/subscriptions
     *
     * List repositories watched by the authenticated user
     */
    public function activityListWatchedReposForAuthenticatedUser(
        ActivityListWatchedReposForAuthenticatedUserRequest $request,
    ): ActivityListWatchedReposForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListWatchedReposForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/starred/{owner}/{repo}
     *
     * Star a repository for the authenticated user
     */
    public function activityStarRepoForAuthenticatedUser(
        string $owner,
        string $repo,
    ): ActivityStarRepoForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityStarRepoForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/starred/{owner}/{repo}
     *
     * Unstar a repository for the authenticated user
     */
    public function activityUnstarRepoForAuthenticatedUser(
        string $owner,
        string $repo,
    ): ActivityUnstarRepoForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityUnstarRepoForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/installations/{installation_id}/repositories/{repository_id}
     *
     * Add a repository to an app installation
     */
    public function appsAddRepoToInstallation(
        int $installation_id,
        int $repository_id,
    ): AppsAddRepoToInstallationResponse
    {
        // TODO: Implement AppsAddRepoToInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/installations/{installation_id}/repositories
     *
     * List repositories accessible to the user access token
     */
    public function appsListInstallationReposForAuthenticatedUser(
        AppsListInstallationReposForAuthenticatedUserRequest $request,
        int $installation_id,
    ): AppsListInstallationReposForAuthenticatedUserResponse
    {
        // TODO: Implement AppsListInstallationReposForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/marketplace_purchases
     *
     * List subscriptions for the authenticated user
     */
    public function appsListSubscriptionsForAuthenticatedUser(
        AppsListSubscriptionsForAuthenticatedUserRequest $request,
    ): AppsListSubscriptionsForAuthenticatedUserResponse
    {
        // TODO: Implement AppsListSubscriptionsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/marketplace_purchases/stubbed
     *
     * List subscriptions for the authenticated user (stubbed)
     */
    public function appsListSubscriptionsForAuthenticatedUserStubbed(
        AppsListSubscriptionsForAuthenticatedUserStubbedRequest $request,
    ): AppsListSubscriptionsForAuthenticatedUserStubbedResponse
    {
        // TODO: Implement AppsListSubscriptionsForAuthenticatedUserStubbed
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/installations/{installation_id}/repositories/{repository_id}
     *
     * Remove a repository from an app installation
     */
    public function appsRemoveRepoFromInstallation(
        int $installation_id,
        int $repository_id,
    ): AppsRemoveRepoFromInstallationResponse
    {
        // TODO: Implement AppsRemoveRepoFromInstallation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/settings/billing/actions
     *
     * Get GitHub Actions billing for a user
     */
    public function billingGetGithubActionsBillingUser(
        string $username,
    ): BillingGetGithubActionsBillingUserResponse
    {
        // TODO: Implement BillingGetGithubActionsBillingUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/settings/billing/packages
     *
     * Get GitHub Packages billing for a user
     */
    public function billingGetGithubPackagesBillingUser(
        string $username,
    ): BillingGetGithubPackagesBillingUserResponse
    {
        // TODO: Implement BillingGetGithubPackagesBillingUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/settings/billing/shared-storage
     *
     * Get shared storage billing for a user
     */
    public function billingGetSharedStorageBillingUser(
        string $username,
    ): BillingGetSharedStorageBillingUserResponse
    {
        // TODO: Implement BillingGetSharedStorageBillingUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/gists
     *
     * List gists for a user
     */
    public function gistsListForUser(
        GistsListForUserRequest $request,
        string $username,
    ): GistsListForUserResponse
    {
        // TODO: Implement GistsListForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/interaction-limits
     *
     * Remove interaction restrictions from your public repositories
     */
    public function interactionsRemoveRestrictionsForAuthenticatedUser(
    ): InteractionsRemoveRestrictionsForAuthenticatedUserResponse
    {
        // TODO: Implement InteractionsRemoveRestrictionsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/interaction-limits
     *
     * Set interaction restrictions for your public repositories
     */
    public function interactionsSetRestrictionsForAuthenticatedUser(
        InteractionsSetRestrictionsForAuthenticatedUserRequest $request,
    ): InteractionsSetRestrictionsForAuthenticatedUserResponse
    {
        // TODO: Implement InteractionsSetRestrictionsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/issues
     *
     * List user account issues assigned to the authenticated user
     */
    public function issuesListForAuthenticatedUser(
        IssuesListForAuthenticatedUserRequest $request,
    ): IssuesListForAuthenticatedUserResponse
    {
        // TODO: Implement IssuesListForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/migrations/{migration_id}/archive
     *
     * Delete a user migration archive
     */
    public function migrationsDeleteArchiveForAuthenticatedUser(
        int $migration_id,
    ): MigrationsDeleteArchiveForAuthenticatedUserResponse
    {
        // TODO: Implement MigrationsDeleteArchiveForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/migrations/{migration_id}/archive
     *
     * Download a user migration archive
     */
    public function migrationsGetArchiveForAuthenticatedUser(
        int $migration_id,
    ): void
    {
        // TODO: Implement MigrationsGetArchiveForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/migrations/{migration_id}
     *
     * Get a user migration status
     */
    public function migrationsGetStatusForAuthenticatedUser(
        MigrationsGetStatusForAuthenticatedUserRequest $request,
        int $migration_id,
    ): MigrationsGetStatusForAuthenticatedUserResponse
    {
        // TODO: Implement MigrationsGetStatusForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/migrations
     *
     * List user migrations
     */
    public function migrationsListForAuthenticatedUser(
        MigrationsListForAuthenticatedUserRequest $request,
    ): MigrationsListForAuthenticatedUserResponse
    {
        // TODO: Implement MigrationsListForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/migrations/{migration_id}/repositories
     *
     * List repositories for a user migration
     */
    public function migrationsListReposForUser(
        MigrationsListReposForUserRequest $request,
        int $migration_id,
    ): MigrationsListReposForUserResponse
    {
        // TODO: Implement MigrationsListReposForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/migrations
     *
     * Start a user migration
     */
    public function migrationsStartForAuthenticatedUser(
        MigrationsStartForAuthenticatedUserRequest $request,
    ): MigrationsStartForAuthenticatedUserResponse
    {
        // TODO: Implement MigrationsStartForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock
     *
     * Unlock a user repository
     */
    public function migrationsUnlockRepoForAuthenticatedUser(
        int $migration_id,
        string $repo_name,
    ): MigrationsUnlockRepoForAuthenticatedUserResponse
    {
        // TODO: Implement MigrationsUnlockRepoForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/memberships/orgs/{org}
     *
     * Get an organization membership for the authenticated user
     */
    public function orgsGetMembershipForAuthenticatedUser(
        string $org,
    ): OrgsGetMembershipForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsGetMembershipForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/orgs
     *
     * List organizations for the authenticated user
     */
    public function orgsListForAuthenticatedUser(
        OrgsListForAuthenticatedUserRequest $request,
    ): OrgsListForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsListForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/orgs
     *
     * List organizations for a user
     */
    public function orgsListForUser(
        OrgsListForUserRequest $request,
        string $username,
    ): OrgsListForUserResponse
    {
        // TODO: Implement OrgsListForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/memberships/orgs
     *
     * List organization memberships for the authenticated user
     */
    public function orgsListMembershipsForAuthenticatedUser(
        OrgsListMembershipsForAuthenticatedUserRequest $request,
    ): OrgsListMembershipsForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsListMembershipsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /user/memberships/orgs/{org}
     *
     * Update an organization membership for the authenticated user
     */
    public function orgsUpdateMembershipForAuthenticatedUser(
        OrgsUpdateMembershipForAuthenticatedUserRequest $request,
        string $org,
    ): OrgsUpdateMembershipForAuthenticatedUserResponse
    {
        // TODO: Implement OrgsUpdateMembershipForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/packages/{package_type}/{package_name}
     *
     * Delete a package for the authenticated user
     */
    public function packagesDeletePackageForAuthenticatedUser(
        PackageType $package_type,
        string $package_name,
    ): PackagesDeletePackageForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesDeletePackageForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /users/{username}/packages/{package_type}/{package_name}
     *
     * Delete a package for a user
     */
    public function packagesDeletePackageForUser(
        PackageType $package_type,
        string $package_name,
        string $username,
    ): PackagesDeletePackageForUserResponse
    {
        // TODO: Implement PackagesDeletePackageForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Delete a package version for the authenticated user
     */
    public function packagesDeletePackageVersionForAuthenticatedUser(
        PackageType $package_type,
        string $package_name,
        int $package_version_id,
    ): PackagesDeletePackageVersionForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesDeletePackageVersionForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Delete package version for a user
     */
    public function packagesDeletePackageVersionForUser(
        PackageType $package_type,
        string $package_name,
        string $username,
        int $package_version_id,
    ): PackagesDeletePackageVersionForUserResponse
    {
        // TODO: Implement PackagesDeletePackageVersionForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/packages/{package_type}/{package_name}/versions
     *
     * Get all package versions for a package owned by the authenticated user
     */
    public function packagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUser(
        PackagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUserRequest $request,
        PackageType $package_type,
        string $package_name,
    ): PackagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUserResponse
    {
        // TODO: Implement PackagesGetAllPackageVersionsForPackageOwnedByAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/packages/{package_type}/{package_name}/versions
     *
     * Get all package versions for a package owned by a user
     */
    public function packagesGetAllPackageVersionsForPackageOwnedByUser(
        PackageType $package_type,
        string $package_name,
        string $username,
    ): PackagesGetAllPackageVersionsForPackageOwnedByUserResponse
    {
        // TODO: Implement PackagesGetAllPackageVersionsForPackageOwnedByUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/packages/{package_type}/{package_name}
     *
     * Get a package for the authenticated user
     */
    public function packagesGetPackageForAuthenticatedUser(
        PackageType $package_type,
        string $package_name,
    ): PackagesGetPackageForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesGetPackageForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/packages/{package_type}/{package_name}
     *
     * Get a package for a user
     */
    public function packagesGetPackageForUser(
        PackageType $package_type,
        string $package_name,
        string $username,
    ): PackagesGetPackageForUserResponse
    {
        // TODO: Implement PackagesGetPackageForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Get a package version for the authenticated user
     */
    public function packagesGetPackageVersionForAuthenticatedUser(
        PackageType $package_type,
        string $package_name,
        int $package_version_id,
    ): PackagesGetPackageVersionForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesGetPackageVersionForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}
     *
     * Get a package version for a user
     */
    public function packagesGetPackageVersionForUser(
        PackageType $package_type,
        string $package_name,
        int $package_version_id,
        string $username,
    ): PackagesGetPackageVersionForUserResponse
    {
        // TODO: Implement PackagesGetPackageVersionForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/packages
     *
     * List packages for the authenticated user's namespace
     */
    public function packagesListPackagesForAuthenticatedUser(
        PackagesListPackagesForAuthenticatedUserRequest $request,
    ): PackagesListPackagesForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesListPackagesForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/packages
     *
     * List packages for a user
     */
    public function packagesListPackagesForUser(
        PackagesListPackagesForUserRequest $request,
        string $username,
    ): PackagesListPackagesForUserResponse
    {
        // TODO: Implement PackagesListPackagesForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/packages/{package_type}/{package_name}/restore
     *
     * Restore a package for the authenticated user
     */
    public function packagesRestorePackageForAuthenticatedUser(
        PackagesRestorePackageForAuthenticatedUserRequest $request,
        PackageType $package_type,
        string $package_name,
    ): PackagesRestorePackageForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesRestorePackageForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /users/{username}/packages/{package_type}/{package_name}/restore
     *
     * Restore a package for a user
     */
    public function packagesRestorePackageForUser(
        PackagesRestorePackageForUserRequest $request,
        PackageType $package_type,
        string $package_name,
        string $username,
    ): PackagesRestorePackageForUserResponse
    {
        // TODO: Implement PackagesRestorePackageForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/packages/{package_type}/{package_name}/versions/{package_version_id}/restore
     *
     * Restore a package version for the authenticated user
     */
    public function packagesRestorePackageVersionForAuthenticatedUser(
        PackageType $package_type,
        string $package_name,
        int $package_version_id,
    ): PackagesRestorePackageVersionForAuthenticatedUserResponse
    {
        // TODO: Implement PackagesRestorePackageVersionForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore
     *
     * Restore package version for a user
     */
    public function packagesRestorePackageVersionForUser(
        PackageType $package_type,
        string $package_name,
        string $username,
        int $package_version_id,
    ): PackagesRestorePackageVersionForUserResponse
    {
        // TODO: Implement PackagesRestorePackageVersionForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/projects
     *
     * Create a user project
     */
    public function projectsCreateForAuthenticatedUser(
        ProjectsCreateForAuthenticatedUserRequest $request,
    ): ProjectsCreateForAuthenticatedUserResponse
    {
        // TODO: Implement ProjectsCreateForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/projects
     *
     * List user projects
     */
    public function projectsListForUser(
        ProjectsListForUserRequest $request,
        string $username,
    ): ProjectsListForUserResponse
    {
        // TODO: Implement ProjectsListForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /user/repository_invitations/{invitation_id}
     *
     * Accept a repository invitation
     */
    public function reposAcceptInvitation(
        int $invitation_id,
    ): ReposAcceptInvitationResponse
    {
        // TODO: Implement ReposAcceptInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/repos
     *
     * Create a repository for the authenticated user
     */
    public function reposCreateForAuthenticatedUser(
        ReposCreateForAuthenticatedUserRequest $request,
    ): ReposCreateForAuthenticatedUserResponse
    {
        // TODO: Implement ReposCreateForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/repository_invitations/{invitation_id}
     *
     * Decline a repository invitation
     */
    public function reposDeclineInvitation(
        int $invitation_id,
    ): ReposDeclineInvitationResponse
    {
        // TODO: Implement ReposDeclineInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/repos
     *
     * List repositories for the authenticated user
     */
    public function reposListForAuthenticatedUser(
        ReposListForAuthenticatedUserRequest $request,
    ): ReposListForAuthenticatedUserResponse
    {
        // TODO: Implement ReposListForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/repos
     *
     * List repositories for a user
     */
    public function reposListForUser(
        ReposListForUserRequest $request,
        string $username,
    ): ReposListForUserResponse
    {
        // TODO: Implement ReposListForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/repository_invitations
     *
     * List repository invitations for the authenticated user
     */
    public function reposListInvitationsForAuthenticatedUser(
        ReposListInvitationsForAuthenticatedUserRequest $request,
    ): ReposListInvitationsForAuthenticatedUserResponse
    {
        // TODO: Implement ReposListInvitationsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/teams
     *
     * List teams for the authenticated user
     */
    public function teamsListForAuthenticatedUser(
        TeamsListForAuthenticatedUserRequest $request,
    ): TeamsListForAuthenticatedUserResponse
    {
        // TODO: Implement TeamsListForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/emails
     *
     * Add an email address for the authenticated user
     */
    public function usersAddEmailForAuthenticated(
        UsersAddEmailForAuthenticatedRequest $request,
    ): UsersAddEmailForAuthenticatedResponse
    {
        // TODO: Implement UsersAddEmailForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/blocks/{username}
     *
     * Block a user
     */
    public function usersBlock(
        string $username,
    ): UsersBlockResponse
    {
        // TODO: Implement UsersBlock
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/blocks/{username}
     *
     * Check if a user is blocked by the authenticated user
     */
    public function usersCheckBlocked(
        string $username,
    ): UsersCheckBlockedResponse
    {
        // TODO: Implement UsersCheckBlocked
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/following/{target_user}
     *
     * Check if a user follows another user
     */
    public function usersCheckFollowingForUser(
        string $username,
        string $target_user,
    ): UsersCheckFollowingForUserResponse
    {
        // TODO: Implement UsersCheckFollowingForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/following/{username}
     *
     * Check if a person is followed by the authenticated user
     */
    public function usersCheckPersonIsFollowedByAuthenticated(
        string $username,
    ): UsersCheckPersonIsFollowedByAuthenticatedResponse
    {
        // TODO: Implement UsersCheckPersonIsFollowedByAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/gpg_keys
     *
     * Create a GPG key for the authenticated user
     */
    public function usersCreateGpgKeyForAuthenticated(
        UsersCreateGpgKeyForAuthenticatedRequest $request,
    ): UsersCreateGpgKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersCreateGpgKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/keys
     *
     * Create a public SSH key for the authenticated user
     */
    public function usersCreatePublicSshKeyForAuthenticated(
        UsersCreatePublicSshKeyForAuthenticatedRequest $request,
    ): UsersCreatePublicSshKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersCreatePublicSshKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/emails
     *
     * Delete an email address for the authenticated user
     */
    public function usersDeleteEmailForAuthenticated(
        UsersDeleteEmailForAuthenticatedRequest $request,
    ): UsersDeleteEmailForAuthenticatedResponse
    {
        // TODO: Implement UsersDeleteEmailForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/gpg_keys/{gpg_key_id}
     *
     * Delete a GPG key for the authenticated user
     */
    public function usersDeleteGpgKeyForAuthenticated(
        int $gpg_key_id,
    ): UsersDeleteGpgKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersDeleteGpgKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/keys/{key_id}
     *
     * Delete a public SSH key for the authenticated user
     */
    public function usersDeletePublicSshKeyForAuthenticated(
        int $key_id,
    ): UsersDeletePublicSshKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersDeletePublicSshKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/following/{username}
     *
     * Follow a user
     */
    public function usersFollow(
        string $username,
    ): UsersFollowResponse
    {
        // TODO: Implement UsersFollow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user
     *
     * Get the authenticated user
     */
    public function usersGetAuthenticated(
    ): UsersGetAuthenticatedResponse
    {
        // TODO: Implement UsersGetAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}
     *
     * Get a user
     */
    public function usersGetByUsername(
        string $username,
    ): UsersGetByUsernameResponse
    {
        // TODO: Implement UsersGetByUsername
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/hovercard
     *
     * Get contextual information for a user
     */
    public function usersGetContextForUser(
        UsersGetContextForUserRequest $request,
        string $username,
    ): UsersGetContextForUserResponse
    {
        // TODO: Implement UsersGetContextForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/gpg_keys/{gpg_key_id}
     *
     * Get a GPG key for the authenticated user
     */
    public function usersGetGpgKeyForAuthenticated(
        int $gpg_key_id,
    ): UsersGetGpgKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersGetGpgKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/keys/{key_id}
     *
     * Get a public SSH key for the authenticated user
     */
    public function usersGetPublicSshKeyForAuthenticated(
        int $key_id,
    ): UsersGetPublicSshKeyForAuthenticatedResponse
    {
        // TODO: Implement UsersGetPublicSshKeyForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users
     *
     * List users
     */
    public function usersList(
        UsersListRequest $request,
    ): UsersListResponse
    {
        // TODO: Implement UsersList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/blocks
     *
     * List users blocked by the authenticated user
     */
    public function usersListBlockedByAuthenticated(
    ): UsersListBlockedByAuthenticatedResponse
    {
        // TODO: Implement UsersListBlockedByAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/emails
     *
     * List email addresses for the authenticated user
     */
    public function usersListEmailsForAuthenticated(
        UsersListEmailsForAuthenticatedRequest $request,
    ): UsersListEmailsForAuthenticatedResponse
    {
        // TODO: Implement UsersListEmailsForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/following
     *
     * List the people the authenticated user follows
     */
    public function usersListFollowedByAuthenticated(
        UsersListFollowedByAuthenticatedRequest $request,
    ): UsersListFollowedByAuthenticatedResponse
    {
        // TODO: Implement UsersListFollowedByAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/followers
     *
     * List followers of the authenticated user
     */
    public function usersListFollowersForAuthenticatedUser(
        UsersListFollowersForAuthenticatedUserRequest $request,
    ): UsersListFollowersForAuthenticatedUserResponse
    {
        // TODO: Implement UsersListFollowersForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/followers
     *
     * List followers of a user
     */
    public function usersListFollowersForUser(
        UsersListFollowersForUserRequest $request,
        string $username,
    ): UsersListFollowersForUserResponse
    {
        // TODO: Implement UsersListFollowersForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/following
     *
     * List the people a user follows
     */
    public function usersListFollowingForUser(
        UsersListFollowingForUserRequest $request,
        string $username,
    ): UsersListFollowingForUserResponse
    {
        // TODO: Implement UsersListFollowingForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/gpg_keys
     *
     * List GPG keys for the authenticated user
     */
    public function usersListGpgKeysForAuthenticated(
        UsersListGpgKeysForAuthenticatedRequest $request,
    ): UsersListGpgKeysForAuthenticatedResponse
    {
        // TODO: Implement UsersListGpgKeysForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/gpg_keys
     *
     * List GPG keys for a user
     */
    public function usersListGpgKeysForUser(
        UsersListGpgKeysForUserRequest $request,
        string $username,
    ): UsersListGpgKeysForUserResponse
    {
        // TODO: Implement UsersListGpgKeysForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/public_emails
     *
     * List public email addresses for the authenticated user
     */
    public function usersListPublicEmailsForAuthenticated(
        UsersListPublicEmailsForAuthenticatedRequest $request,
    ): UsersListPublicEmailsForAuthenticatedResponse
    {
        // TODO: Implement UsersListPublicEmailsForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /users/{username}/keys
     *
     * List public keys for a user
     */
    public function usersListPublicKeysForUser(
        UsersListPublicKeysForUserRequest $request,
        string $username,
    ): UsersListPublicKeysForUserResponse
    {
        // TODO: Implement UsersListPublicKeysForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/keys
     *
     * List public SSH keys for the authenticated user
     */
    public function usersListPublicSshKeysForAuthenticated(
        UsersListPublicSshKeysForAuthenticatedRequest $request,
    ): UsersListPublicSshKeysForAuthenticatedResponse
    {
        // TODO: Implement UsersListPublicSshKeysForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /user/email/visibility
     *
     * Set primary email visibility for the authenticated user
     */
    public function usersSetPrimaryEmailVisibilityForAuthenticated(
        UsersSetPrimaryEmailVisibilityForAuthenticatedRequest $request,
    ): UsersSetPrimaryEmailVisibilityForAuthenticatedResponse
    {
        // TODO: Implement UsersSetPrimaryEmailVisibilityForAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/blocks/{username}
     *
     * Unblock a user
     */
    public function usersUnblock(
        string $username,
    ): UsersUnblockResponse
    {
        // TODO: Implement UsersUnblock
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/following/{username}
     *
     * Unfollow a user
     */
    public function usersUnfollow(
        string $username,
    ): UsersUnfollowResponse
    {
        // TODO: Implement UsersUnfollow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /user
     *
     * Update the authenticated user
     */
    public function usersUpdateAuthenticated(
        UsersUpdateAuthenticatedRequest $request,
    ): UsersUpdateAuthenticatedResponse
    {
        // TODO: Implement UsersUpdateAuthenticated
        throw new \BadMethodCallException('Not implemented');
    }
}
