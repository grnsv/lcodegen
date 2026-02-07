<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MarkdownController as BaseMarkdownController;
use App\Http\Requests\MarkdownRenderRequest;
use Illuminate\Http\Request;
use App\Http\Responses\OpenApi\MarkdownRenderRawResponse;
use App\Http\Responses\OpenApi\MarkdownRenderResponse;

final class MarkdownController extends BaseMarkdownController
{
    /**
     * POST /markdown
     *
     * Render a Markdown document
     */
    public function markdownRender(
        MarkdownRenderRequest $request,
    ): MarkdownRenderResponse
    {
        // TODO: Implement MarkdownRender
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /markdown/raw
     *
     * Render a Markdown document in raw mode
     */
    public function markdownRenderRaw(
        Request $request,
    ): MarkdownRenderRawResponse
    {
        // TODO: Implement MarkdownRenderRaw
        throw new \BadMethodCallException('Not implemented');
    }
}
