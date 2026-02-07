<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\TeamController as BaseTeamController;
use App\Http\Requests\ReactionsCreateForTeamDiscussionCommentLegacyRequest;
use App\Http\Requests\ReactionsCreateForTeamDiscussionLegacyRequest;
use App\Http\Requests\ReactionsListForTeamDiscussionCommentLegacyRequest;
use App\Http\Requests\ReactionsListForTeamDiscussionLegacyRequest;
use App\Http\Requests\TeamsAddOrUpdateMembershipForUserLegacyRequest;
use App\Http\Requests\TeamsAddOrUpdateProjectPermissionsLegacyRequest;
use App\Http\Requests\TeamsAddOrUpdateRepoPermissionsLegacyRequest;
use App\Http\Requests\TeamsCreateDiscussionCommentLegacyRequest;
use App\Http\Requests\TeamsCreateDiscussionLegacyRequest;
use App\Http\Requests\TeamsCreateOrUpdateIdpGroupConnectionsLegacyRequest;
use App\Http\Requests\TeamsListChildLegacyRequest;
use App\Http\Requests\TeamsListDiscussionCommentsLegacyRequest;
use App\Http\Requests\TeamsListDiscussionsLegacyRequest;
use App\Http\Requests\TeamsListMembersLegacyRequest;
use App\Http\Requests\TeamsListPendingInvitationsLegacyRequest;
use App\Http\Requests\TeamsListProjectsLegacyRequest;
use App\Http\Requests\TeamsListReposLegacyRequest;
use App\Http\Requests\TeamsUpdateDiscussionCommentLegacyRequest;
use App\Http\Requests\TeamsUpdateDiscussionLegacyRequest;
use App\Http\Requests\TeamsUpdateLegacyRequest;
use App\Http\Responses\OpenApi\ReactionsCreateForTeamDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForTeamDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\ReactionsListForTeamDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\ReactionsListForTeamDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\TeamsAddMemberLegacyResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateMembershipForUserLegacyResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateProjectPermissionsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsAddOrUpdateRepoPermissionsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsCheckPermissionsForProjectLegacyResponse;
use App\Http\Responses\OpenApi\TeamsCheckPermissionsForRepoLegacyResponse;
use App\Http\Responses\OpenApi\TeamsCreateDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\TeamsCreateDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\TeamsCreateOrUpdateIdpGroupConnectionsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsDeleteDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\TeamsDeleteDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\TeamsDeleteLegacyResponse;
use App\Http\Responses\OpenApi\TeamsGetDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\TeamsGetDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\TeamsGetLegacyResponse;
use App\Http\Responses\OpenApi\TeamsGetMemberLegacyResponse;
use App\Http\Responses\OpenApi\TeamsGetMembershipForUserLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListChildLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListDiscussionCommentsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListDiscussionsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListIdpGroupsForLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListMembersLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListPendingInvitationsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListProjectsLegacyResponse;
use App\Http\Responses\OpenApi\TeamsListReposLegacyResponse;
use App\Http\Responses\OpenApi\TeamsRemoveMemberLegacyResponse;
use App\Http\Responses\OpenApi\TeamsRemoveMembershipForUserLegacyResponse;
use App\Http\Responses\OpenApi\TeamsRemoveProjectLegacyResponse;
use App\Http\Responses\OpenApi\TeamsRemoveRepoLegacyResponse;
use App\Http\Responses\OpenApi\TeamsUpdateDiscussionCommentLegacyResponse;
use App\Http\Responses\OpenApi\TeamsUpdateDiscussionLegacyResponse;
use App\Http\Responses\OpenApi\TeamsUpdateLegacyResponse;

final class TeamController extends BaseTeamController
{
    /**
     * POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions
     *
     * Create reaction for a team discussion comment (Legacy)
     */
    public function reactionsCreateForTeamDiscussionCommentLegacy(
        ReactionsCreateForTeamDiscussionCommentLegacyRequest $request,
        int $team_id,
        int $discussion_number,
        int $comment_number,
    ): ReactionsCreateForTeamDiscussionCommentLegacyResponse
    {
        // TODO: Implement ReactionsCreateForTeamDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /teams/{team_id}/discussions/{discussion_number}/reactions
     *
     * Create reaction for a team discussion (Legacy)
     */
    public function reactionsCreateForTeamDiscussionLegacy(
        ReactionsCreateForTeamDiscussionLegacyRequest $request,
        int $team_id,
        int $discussion_number,
    ): ReactionsCreateForTeamDiscussionLegacyResponse
    {
        // TODO: Implement ReactionsCreateForTeamDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions
     *
     * List reactions for a team discussion comment (Legacy)
     */
    public function reactionsListForTeamDiscussionCommentLegacy(
        ReactionsListForTeamDiscussionCommentLegacyRequest $request,
        int $team_id,
        int $discussion_number,
        int $comment_number,
    ): ReactionsListForTeamDiscussionCommentLegacyResponse
    {
        // TODO: Implement ReactionsListForTeamDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions/{discussion_number}/reactions
     *
     * List reactions for a team discussion (Legacy)
     */
    public function reactionsListForTeamDiscussionLegacy(
        ReactionsListForTeamDiscussionLegacyRequest $request,
        int $team_id,
        int $discussion_number,
    ): ReactionsListForTeamDiscussionLegacyResponse
    {
        // TODO: Implement ReactionsListForTeamDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /teams/{team_id}/members/{username}
     *
     * Add team member (Legacy)
     */
    public function teamsAddMemberLegacy(
        int $team_id,
        string $username,
    ): TeamsAddMemberLegacyResponse
    {
        // TODO: Implement TeamsAddMemberLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /teams/{team_id}/memberships/{username}
     *
     * Add or update team membership for a user (Legacy)
     */
    public function teamsAddOrUpdateMembershipForUserLegacy(
        TeamsAddOrUpdateMembershipForUserLegacyRequest $request,
        int $team_id,
        string $username,
    ): TeamsAddOrUpdateMembershipForUserLegacyResponse
    {
        // TODO: Implement TeamsAddOrUpdateMembershipForUserLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /teams/{team_id}/projects/{project_id}
     *
     * Add or update team project permissions (Legacy)
     */
    public function teamsAddOrUpdateProjectPermissionsLegacy(
        TeamsAddOrUpdateProjectPermissionsLegacyRequest $request,
        int $team_id,
        int $project_id,
    ): TeamsAddOrUpdateProjectPermissionsLegacyResponse
    {
        // TODO: Implement TeamsAddOrUpdateProjectPermissionsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /teams/{team_id}/repos/{owner}/{repo}
     *
     * Add or update team repository permissions (Legacy)
     */
    public function teamsAddOrUpdateRepoPermissionsLegacy(
        TeamsAddOrUpdateRepoPermissionsLegacyRequest $request,
        int $team_id,
        string $owner,
        string $repo,
    ): TeamsAddOrUpdateRepoPermissionsLegacyResponse
    {
        // TODO: Implement TeamsAddOrUpdateRepoPermissionsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/projects/{project_id}
     *
     * Check team permissions for a project (Legacy)
     */
    public function teamsCheckPermissionsForProjectLegacy(
        int $team_id,
        int $project_id,
    ): TeamsCheckPermissionsForProjectLegacyResponse
    {
        // TODO: Implement TeamsCheckPermissionsForProjectLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/repos/{owner}/{repo}
     *
     * Check team permissions for a repository (Legacy)
     */
    public function teamsCheckPermissionsForRepoLegacy(
        int $team_id,
        string $owner,
        string $repo,
    ): TeamsCheckPermissionsForRepoLegacyResponse
    {
        // TODO: Implement TeamsCheckPermissionsForRepoLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /teams/{team_id}/discussions/{discussion_number}/comments
     *
     * Create a discussion comment (Legacy)
     */
    public function teamsCreateDiscussionCommentLegacy(
        TeamsCreateDiscussionCommentLegacyRequest $request,
        int $team_id,
        int $discussion_number,
    ): TeamsCreateDiscussionCommentLegacyResponse
    {
        // TODO: Implement TeamsCreateDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /teams/{team_id}/discussions
     *
     * Create a discussion (Legacy)
     */
    public function teamsCreateDiscussionLegacy(
        TeamsCreateDiscussionLegacyRequest $request,
        int $team_id,
    ): TeamsCreateDiscussionLegacyResponse
    {
        // TODO: Implement TeamsCreateDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /teams/{team_id}/team-sync/group-mappings
     *
     * Create or update IdP group connections (Legacy)
     */
    public function teamsCreateOrUpdateIdpGroupConnectionsLegacy(
        TeamsCreateOrUpdateIdpGroupConnectionsLegacyRequest $request,
        int $team_id,
    ): TeamsCreateOrUpdateIdpGroupConnectionsLegacyResponse
    {
        // TODO: Implement TeamsCreateOrUpdateIdpGroupConnectionsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Delete a discussion comment (Legacy)
     */
    public function teamsDeleteDiscussionCommentLegacy(
        int $team_id,
        int $discussion_number,
        int $comment_number,
    ): TeamsDeleteDiscussionCommentLegacyResponse
    {
        // TODO: Implement TeamsDeleteDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/discussions/{discussion_number}
     *
     * Delete a discussion (Legacy)
     */
    public function teamsDeleteDiscussionLegacy(
        int $team_id,
        int $discussion_number,
    ): TeamsDeleteDiscussionLegacyResponse
    {
        // TODO: Implement TeamsDeleteDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}
     *
     * Delete a team (Legacy)
     */
    public function teamsDeleteLegacy(
        int $team_id,
    ): TeamsDeleteLegacyResponse
    {
        // TODO: Implement TeamsDeleteLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Get a discussion comment (Legacy)
     */
    public function teamsGetDiscussionCommentLegacy(
        int $team_id,
        int $discussion_number,
        int $comment_number,
    ): TeamsGetDiscussionCommentLegacyResponse
    {
        // TODO: Implement TeamsGetDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions/{discussion_number}
     *
     * Get a discussion (Legacy)
     */
    public function teamsGetDiscussionLegacy(
        int $team_id,
        int $discussion_number,
    ): TeamsGetDiscussionLegacyResponse
    {
        // TODO: Implement TeamsGetDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}
     *
     * Get a team (Legacy)
     */
    public function teamsGetLegacy(
        int $team_id,
    ): TeamsGetLegacyResponse
    {
        // TODO: Implement TeamsGetLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/members/{username}
     *
     * Get team member (Legacy)
     */
    public function teamsGetMemberLegacy(
        int $team_id,
        string $username,
    ): TeamsGetMemberLegacyResponse
    {
        // TODO: Implement TeamsGetMemberLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/memberships/{username}
     *
     * Get team membership for a user (Legacy)
     */
    public function teamsGetMembershipForUserLegacy(
        int $team_id,
        string $username,
    ): TeamsGetMembershipForUserLegacyResponse
    {
        // TODO: Implement TeamsGetMembershipForUserLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/teams
     *
     * List child teams (Legacy)
     */
    public function teamsListChildLegacy(
        TeamsListChildLegacyRequest $request,
        int $team_id,
    ): TeamsListChildLegacyResponse
    {
        // TODO: Implement TeamsListChildLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions/{discussion_number}/comments
     *
     * List discussion comments (Legacy)
     */
    public function teamsListDiscussionCommentsLegacy(
        TeamsListDiscussionCommentsLegacyRequest $request,
        int $team_id,
        int $discussion_number,
    ): TeamsListDiscussionCommentsLegacyResponse
    {
        // TODO: Implement TeamsListDiscussionCommentsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/discussions
     *
     * List discussions (Legacy)
     */
    public function teamsListDiscussionsLegacy(
        TeamsListDiscussionsLegacyRequest $request,
        int $team_id,
    ): TeamsListDiscussionsLegacyResponse
    {
        // TODO: Implement TeamsListDiscussionsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/team-sync/group-mappings
     *
     * List IdP groups for a team (Legacy)
     */
    public function teamsListIdpGroupsForLegacy(
        int $team_id,
    ): TeamsListIdpGroupsForLegacyResponse
    {
        // TODO: Implement TeamsListIdpGroupsForLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/members
     *
     * List team members (Legacy)
     */
    public function teamsListMembersLegacy(
        TeamsListMembersLegacyRequest $request,
        int $team_id,
    ): TeamsListMembersLegacyResponse
    {
        // TODO: Implement TeamsListMembersLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/invitations
     *
     * List pending team invitations (Legacy)
     */
    public function teamsListPendingInvitationsLegacy(
        TeamsListPendingInvitationsLegacyRequest $request,
        int $team_id,
    ): TeamsListPendingInvitationsLegacyResponse
    {
        // TODO: Implement TeamsListPendingInvitationsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/projects
     *
     * List team projects (Legacy)
     */
    public function teamsListProjectsLegacy(
        TeamsListProjectsLegacyRequest $request,
        int $team_id,
    ): TeamsListProjectsLegacyResponse
    {
        // TODO: Implement TeamsListProjectsLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /teams/{team_id}/repos
     *
     * List team repositories (Legacy)
     */
    public function teamsListReposLegacy(
        TeamsListReposLegacyRequest $request,
        int $team_id,
    ): TeamsListReposLegacyResponse
    {
        // TODO: Implement TeamsListReposLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/members/{username}
     *
     * Remove team member (Legacy)
     */
    public function teamsRemoveMemberLegacy(
        int $team_id,
        string $username,
    ): TeamsRemoveMemberLegacyResponse
    {
        // TODO: Implement TeamsRemoveMemberLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/memberships/{username}
     *
     * Remove team membership for a user (Legacy)
     */
    public function teamsRemoveMembershipForUserLegacy(
        int $team_id,
        string $username,
    ): TeamsRemoveMembershipForUserLegacyResponse
    {
        // TODO: Implement TeamsRemoveMembershipForUserLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/projects/{project_id}
     *
     * Remove a project from a team (Legacy)
     */
    public function teamsRemoveProjectLegacy(
        int $team_id,
        int $project_id,
    ): TeamsRemoveProjectLegacyResponse
    {
        // TODO: Implement TeamsRemoveProjectLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /teams/{team_id}/repos/{owner}/{repo}
     *
     * Remove a repository from a team (Legacy)
     */
    public function teamsRemoveRepoLegacy(
        int $team_id,
        string $owner,
        string $repo,
    ): TeamsRemoveRepoLegacyResponse
    {
        // TODO: Implement TeamsRemoveRepoLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}
     *
     * Update a discussion comment (Legacy)
     */
    public function teamsUpdateDiscussionCommentLegacy(
        TeamsUpdateDiscussionCommentLegacyRequest $request,
        int $team_id,
        int $discussion_number,
        int $comment_number,
    ): TeamsUpdateDiscussionCommentLegacyResponse
    {
        // TODO: Implement TeamsUpdateDiscussionCommentLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /teams/{team_id}/discussions/{discussion_number}
     *
     * Update a discussion (Legacy)
     */
    public function teamsUpdateDiscussionLegacy(
        TeamsUpdateDiscussionLegacyRequest $request,
        int $team_id,
        int $discussion_number,
    ): TeamsUpdateDiscussionLegacyResponse
    {
        // TODO: Implement TeamsUpdateDiscussionLegacy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /teams/{team_id}
     *
     * Update a team (Legacy)
     */
    public function teamsUpdateLegacy(
        TeamsUpdateLegacyRequest $request,
        int $team_id,
    ): TeamsUpdateLegacyResponse
    {
        // TODO: Implement TeamsUpdateLegacy
        throw new \BadMethodCallException('Not implemented');
    }
}
