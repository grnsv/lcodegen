<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SearchController as BaseSearchController;
use App\Http\Requests\SearchCodeRequest;
use App\Http\Requests\SearchCommitsRequest;
use App\Http\Requests\SearchIssuesAndPullRequestsRequest;
use App\Http\Requests\SearchLabelsRequest;
use App\Http\Requests\SearchReposRequest;
use App\Http\Requests\SearchTopicsRequest;
use App\Http\Requests\SearchUsersRequest;
use App\Http\Responses\OpenApi\SearchCodeResponse;
use App\Http\Responses\OpenApi\SearchCommitsResponse;
use App\Http\Responses\OpenApi\SearchIssuesAndPullRequestsResponse;
use App\Http\Responses\OpenApi\SearchLabelsResponse;
use App\Http\Responses\OpenApi\SearchReposResponse;
use App\Http\Responses\OpenApi\SearchTopicsResponse;
use App\Http\Responses\OpenApi\SearchUsersResponse;

final class SearchController extends BaseSearchController
{
    /**
     * GET /search/code
     *
     * Search code
     */
    public function searchCode(
        SearchCodeRequest $request,
    ): SearchCodeResponse
    {
        // TODO: Implement SearchCode
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/commits
     *
     * Search commits
     */
    public function searchCommits(
        SearchCommitsRequest $request,
    ): SearchCommitsResponse
    {
        // TODO: Implement SearchCommits
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/issues
     *
     * Search issues and pull requests
     */
    public function searchIssuesAndPullRequests(
        SearchIssuesAndPullRequestsRequest $request,
    ): SearchIssuesAndPullRequestsResponse
    {
        // TODO: Implement SearchIssuesAndPullRequests
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/labels
     *
     * Search labels
     */
    public function searchLabels(
        SearchLabelsRequest $request,
    ): SearchLabelsResponse
    {
        // TODO: Implement SearchLabels
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/repositories
     *
     * Search repositories
     */
    public function searchRepos(
        SearchReposRequest $request,
    ): SearchReposResponse
    {
        // TODO: Implement SearchRepos
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/topics
     *
     * Search topics
     */
    public function searchTopics(
        SearchTopicsRequest $request,
    ): SearchTopicsResponse
    {
        // TODO: Implement SearchTopics
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /search/users
     *
     * Search users
     */
    public function searchUsers(
        SearchUsersRequest $request,
    ): SearchUsersResponse
    {
        // TODO: Implement SearchUsers
        throw new \BadMethodCallException('Not implemented');
    }
}
