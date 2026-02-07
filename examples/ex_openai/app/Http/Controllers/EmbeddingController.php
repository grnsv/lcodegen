<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EmbeddingController as BaseEmbeddingController;
use App\Http\Requests\CreateEmbeddingRequest;
use App\Http\Responses\OpenApi\CreateEmbeddingResponse;

final class EmbeddingController extends BaseEmbeddingController
{
    /**
     * POST /embeddings
     *
     * Creates an embedding vector representing the input text.
     */
    public function createEmbedding(
        CreateEmbeddingRequest $request,
    ): CreateEmbeddingResponse
    {
        // TODO: Implement CreateEmbedding
        throw new \BadMethodCallException('Not implemented');
    }
}
