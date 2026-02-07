<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GistController as BaseGistController;
use App\Http\Requests\GistsCreateRequest;
use App\Http\Requests\GistsCreateCommentRequest;
use App\Http\Requests\GistsListRequest;
use App\Http\Requests\GistsListCommentsRequest;
use App\Http\Requests\GistsListCommitsRequest;
use App\Http\Requests\GistsListForksRequest;
use App\Http\Requests\GistsListPublicRequest;
use App\Http\Requests\GistsListStarredRequest;
use App\Http\Requests\GistsUpdateCommentRequest;
use App\Http\Responses\OpenApi\GistsCheckIsStarredResponse;
use App\Http\Responses\OpenApi\GistsCreateCommentResponse;
use App\Http\Responses\OpenApi\GistsCreateResponse;
use App\Http\Responses\OpenApi\GistsDeleteCommentResponse;
use App\Http\Responses\OpenApi\GistsDeleteResponse;
use App\Http\Responses\OpenApi\GistsForkResponse;
use App\Http\Responses\OpenApi\GistsGetCommentResponse;
use App\Http\Responses\OpenApi\GistsGetResponse;
use App\Http\Responses\OpenApi\GistsGetRevisionResponse;
use App\Http\Responses\OpenApi\GistsListCommentsResponse;
use App\Http\Responses\OpenApi\GistsListCommitsResponse;
use App\Http\Responses\OpenApi\GistsListForksResponse;
use App\Http\Responses\OpenApi\GistsListPublicResponse;
use App\Http\Responses\OpenApi\GistsListResponse;
use App\Http\Responses\OpenApi\GistsListStarredResponse;
use App\Http\Responses\OpenApi\GistsStarResponse;
use App\Http\Responses\OpenApi\GistsUnstarResponse;
use App\Http\Responses\OpenApi\GistsUpdateCommentResponse;

final class GistController extends BaseGistController
{
    /**
     * GET /gists/{gist_id}/star
     *
     * Check if a gist is starred
     */
    public function gistsCheckIsStarred(
        string $gist_id,
    ): GistsCheckIsStarredResponse
    {
        // TODO: Implement GistsCheckIsStarred
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /gists
     *
     * Create a gist
     */
    public function gistsCreate(
        GistsCreateRequest $request,
    ): GistsCreateResponse
    {
        // TODO: Implement GistsCreate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /gists/{gist_id}/comments
     *
     * Create a gist comment
     */
    public function gistsCreateComment(
        GistsCreateCommentRequest $request,
        string $gist_id,
    ): GistsCreateCommentResponse
    {
        // TODO: Implement GistsCreateComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /gists/{gist_id}
     *
     * Delete a gist
     */
    public function gistsDelete(
        string $gist_id,
    ): GistsDeleteResponse
    {
        // TODO: Implement GistsDelete
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /gists/{gist_id}/comments/{comment_id}
     *
     * Delete a gist comment
     */
    public function gistsDeleteComment(
        string $gist_id,
        int $comment_id,
    ): GistsDeleteCommentResponse
    {
        // TODO: Implement GistsDeleteComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /gists/{gist_id}/forks
     *
     * Fork a gist
     */
    public function gistsFork(
        string $gist_id,
    ): GistsForkResponse
    {
        // TODO: Implement GistsFork
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}
     *
     * Get a gist
     */
    public function gistsGet(
        string $gist_id,
    ): GistsGetResponse
    {
        // TODO: Implement GistsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}/comments/{comment_id}
     *
     * Get a gist comment
     */
    public function gistsGetComment(
        string $gist_id,
        int $comment_id,
    ): GistsGetCommentResponse
    {
        // TODO: Implement GistsGetComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}/{sha}
     *
     * Get a gist revision
     */
    public function gistsGetRevision(
        string $gist_id,
        string $sha,
    ): GistsGetRevisionResponse
    {
        // TODO: Implement GistsGetRevision
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists
     *
     * List gists for the authenticated user
     */
    public function gistsList(
        GistsListRequest $request,
    ): GistsListResponse
    {
        // TODO: Implement GistsList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}/comments
     *
     * List gist comments
     */
    public function gistsListComments(
        GistsListCommentsRequest $request,
        string $gist_id,
    ): GistsListCommentsResponse
    {
        // TODO: Implement GistsListComments
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}/commits
     *
     * List gist commits
     */
    public function gistsListCommits(
        GistsListCommitsRequest $request,
        string $gist_id,
    ): GistsListCommitsResponse
    {
        // TODO: Implement GistsListCommits
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/{gist_id}/forks
     *
     * List gist forks
     */
    public function gistsListForks(
        GistsListForksRequest $request,
        string $gist_id,
    ): GistsListForksResponse
    {
        // TODO: Implement GistsListForks
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/public
     *
     * List public gists
     */
    public function gistsListPublic(
        GistsListPublicRequest $request,
    ): GistsListPublicResponse
    {
        // TODO: Implement GistsListPublic
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gists/starred
     *
     * List starred gists
     */
    public function gistsListStarred(
        GistsListStarredRequest $request,
    ): GistsListStarredResponse
    {
        // TODO: Implement GistsListStarred
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /gists/{gist_id}/star
     *
     * Star a gist
     */
    public function gistsStar(
        string $gist_id,
    ): GistsStarResponse
    {
        // TODO: Implement GistsStar
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /gists/{gist_id}/star
     *
     * Unstar a gist
     */
    public function gistsUnstar(
        string $gist_id,
    ): GistsUnstarResponse
    {
        // TODO: Implement GistsUnstar
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /gists/{gist_id}/comments/{comment_id}
     *
     * Update a gist comment
     */
    public function gistsUpdateComment(
        GistsUpdateCommentRequest $request,
        string $gist_id,
        int $comment_id,
    ): GistsUpdateCommentResponse
    {
        // TODO: Implement GistsUpdateComment
        throw new \BadMethodCallException('Not implemented');
    }
}
