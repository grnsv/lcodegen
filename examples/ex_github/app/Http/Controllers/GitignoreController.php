<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GitignoreController as BaseGitignoreController;
use App\Http\Responses\OpenApi\GitignoreGetAllTemplatesResponse;
use App\Http\Responses\OpenApi\GitignoreGetTemplateResponse;

final class GitignoreController extends BaseGitignoreController
{
    /**
     * GET /gitignore/templates
     *
     * Get all gitignore templates
     */
    public function gitignoreGetAllTemplates(
    ): GitignoreGetAllTemplatesResponse
    {
        // TODO: Implement GitignoreGetAllTemplates
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /gitignore/templates/{name}
     *
     * Get a gitignore template
     */
    public function gitignoreGetTemplate(
        string $name,
    ): GitignoreGetTemplateResponse
    {
        // TODO: Implement GitignoreGetTemplate
        throw new \BadMethodCallException('Not implemented');
    }
}
