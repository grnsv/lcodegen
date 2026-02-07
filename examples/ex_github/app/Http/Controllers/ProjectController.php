<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ProjectController as BaseProjectController;
use App\Http\Requests\ProjectsAddCollaboratorRequest;
use App\Http\Requests\ProjectsCreateColumnRequest;
use App\Http\Requests\ProjectsListCardsRequest;
use App\Http\Requests\ProjectsListCollaboratorsRequest;
use App\Http\Requests\ProjectsListColumnsRequest;
use App\Http\Requests\ProjectsMoveCardRequest;
use App\Http\Requests\ProjectsMoveColumnRequest;
use App\Http\Requests\ProjectsUpdateRequest;
use App\Http\Requests\ProjectsUpdateCardRequest;
use App\Http\Requests\ProjectsUpdateColumnRequest;
use App\Http\Responses\OpenApi\ProjectsAddCollaboratorResponse;
use App\Http\Responses\OpenApi\ProjectsCreateColumnResponse;
use App\Http\Responses\OpenApi\ProjectsDeleteCardResponse;
use App\Http\Responses\OpenApi\ProjectsDeleteColumnResponse;
use App\Http\Responses\OpenApi\ProjectsDeleteResponse;
use App\Http\Responses\OpenApi\ProjectsGetCardResponse;
use App\Http\Responses\OpenApi\ProjectsGetColumnResponse;
use App\Http\Responses\OpenApi\ProjectsGetPermissionForUserResponse;
use App\Http\Responses\OpenApi\ProjectsGetResponse;
use App\Http\Responses\OpenApi\ProjectsListCardsResponse;
use App\Http\Responses\OpenApi\ProjectsListCollaboratorsResponse;
use App\Http\Responses\OpenApi\ProjectsListColumnsResponse;
use App\Http\Responses\OpenApi\ProjectsMoveCardResponse;
use App\Http\Responses\OpenApi\ProjectsMoveColumnResponse;
use App\Http\Responses\OpenApi\ProjectsRemoveCollaboratorResponse;
use App\Http\Responses\OpenApi\ProjectsUpdateCardResponse;
use App\Http\Responses\OpenApi\ProjectsUpdateColumnResponse;
use App\Http\Responses\OpenApi\ProjectsUpdateResponse;

final class ProjectController extends BaseProjectController
{
    /**
     * PUT /projects/{project_id}/collaborators/{username}
     *
     * Add project collaborator
     */
    public function projectsAddCollaborator(
        ProjectsAddCollaboratorRequest $request,
        int $project_id,
        string $username,
    ): ProjectsAddCollaboratorResponse
    {
        // TODO: Implement ProjectsAddCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /projects/{project_id}/columns
     *
     * Create a project column
     */
    public function projectsCreateColumn(
        ProjectsCreateColumnRequest $request,
        int $project_id,
    ): ProjectsCreateColumnResponse
    {
        // TODO: Implement ProjectsCreateColumn
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /projects/{project_id}
     *
     * Delete a project
     */
    public function projectsDelete(
        int $project_id,
    ): ProjectsDeleteResponse
    {
        // TODO: Implement ProjectsDelete
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /projects/columns/cards/{card_id}
     *
     * Delete a project card
     */
    public function projectsDeleteCard(
        int $card_id,
    ): ProjectsDeleteCardResponse
    {
        // TODO: Implement ProjectsDeleteCard
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /projects/columns/{column_id}
     *
     * Delete a project column
     */
    public function projectsDeleteColumn(
        int $column_id,
    ): ProjectsDeleteColumnResponse
    {
        // TODO: Implement ProjectsDeleteColumn
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/{project_id}
     *
     * Get a project
     */
    public function projectsGet(
        int $project_id,
    ): ProjectsGetResponse
    {
        // TODO: Implement ProjectsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/columns/cards/{card_id}
     *
     * Get a project card
     */
    public function projectsGetCard(
        int $card_id,
    ): ProjectsGetCardResponse
    {
        // TODO: Implement ProjectsGetCard
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/columns/{column_id}
     *
     * Get a project column
     */
    public function projectsGetColumn(
        int $column_id,
    ): ProjectsGetColumnResponse
    {
        // TODO: Implement ProjectsGetColumn
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/{project_id}/collaborators/{username}/permission
     *
     * Get project permission for a user
     */
    public function projectsGetPermissionForUser(
        int $project_id,
        string $username,
    ): ProjectsGetPermissionForUserResponse
    {
        // TODO: Implement ProjectsGetPermissionForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/columns/{column_id}/cards
     *
     * List project cards
     */
    public function projectsListCards(
        ProjectsListCardsRequest $request,
        int $column_id,
    ): ProjectsListCardsResponse
    {
        // TODO: Implement ProjectsListCards
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/{project_id}/collaborators
     *
     * List project collaborators
     */
    public function projectsListCollaborators(
        ProjectsListCollaboratorsRequest $request,
        int $project_id,
    ): ProjectsListCollaboratorsResponse
    {
        // TODO: Implement ProjectsListCollaborators
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /projects/{project_id}/columns
     *
     * List project columns
     */
    public function projectsListColumns(
        ProjectsListColumnsRequest $request,
        int $project_id,
    ): ProjectsListColumnsResponse
    {
        // TODO: Implement ProjectsListColumns
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /projects/columns/cards/{card_id}/moves
     *
     * Move a project card
     */
    public function projectsMoveCard(
        ProjectsMoveCardRequest $request,
        int $card_id,
    ): ProjectsMoveCardResponse
    {
        // TODO: Implement ProjectsMoveCard
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /projects/columns/{column_id}/moves
     *
     * Move a project column
     */
    public function projectsMoveColumn(
        ProjectsMoveColumnRequest $request,
        int $column_id,
    ): ProjectsMoveColumnResponse
    {
        // TODO: Implement ProjectsMoveColumn
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /projects/{project_id}/collaborators/{username}
     *
     * Remove user as a collaborator
     */
    public function projectsRemoveCollaborator(
        int $project_id,
        string $username,
    ): ProjectsRemoveCollaboratorResponse
    {
        // TODO: Implement ProjectsRemoveCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /projects/{project_id}
     *
     * Update a project
     */
    public function projectsUpdate(
        ProjectsUpdateRequest $request,
        int $project_id,
    ): ProjectsUpdateResponse
    {
        // TODO: Implement ProjectsUpdate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /projects/columns/cards/{card_id}
     *
     * Update an existing project card
     */
    public function projectsUpdateCard(
        ProjectsUpdateCardRequest $request,
        int $card_id,
    ): ProjectsUpdateCardResponse
    {
        // TODO: Implement ProjectsUpdateCard
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /projects/columns/{column_id}
     *
     * Update an existing project column
     */
    public function projectsUpdateColumn(
        ProjectsUpdateColumnRequest $request,
        int $column_id,
    ): ProjectsUpdateColumnResponse
    {
        // TODO: Implement ProjectsUpdateColumn
        throw new \BadMethodCallException('Not implemented');
    }
}
