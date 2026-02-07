<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\IssueController as BaseIssueController;
use App\Http\Requests\IssuesListRequest;
use App\Http\Responses\OpenApi\IssuesListResponse;

final class IssueController extends BaseIssueController
{
    /**
     * GET /issues
     *
     * List issues assigned to the authenticated user
     */
    public function issuesList(
        IssuesListRequest $request,
    ): IssuesListResponse
    {
        // TODO: Implement IssuesList
        throw new \BadMethodCallException('Not implemented');
    }
}
