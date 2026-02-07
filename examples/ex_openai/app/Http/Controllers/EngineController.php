<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EngineController as BaseEngineController;
use App\Http\Requests\CreateSearchRequest;
use App\Http\Responses\OpenApi\CreateSearchResponse;
use App\Http\Responses\OpenApi\ListEnginesResponse;
use App\Http\Responses\OpenApi\RetrieveEngineResponse;

final class EngineController extends BaseEngineController
{
    /**
     * POST /engines/{engine_id}/search
     *
     * The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

To go beyond the 200 document limit, documents can be processed offline and then used for efficient retrieval at query time. When `file` is set, the search endpoint searches over all the documents in the given file and returns up to the `max_rerank` number of documents. These documents will be returned along with their search scores.

The similarity score is a positive score that usually ranges from 0 to 300 (but can sometimes go higher), where a score above 200 usually means the document is semantically similar to the query.

     */
    public function createSearch(
        CreateSearchRequest $request,
        string $engine_id,
    ): CreateSearchResponse
    {
        // TODO: Implement CreateSearch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /engines
     *
     * Lists the currently available (non-finetuned) models, and provides basic information about each one such as the owner and availability.
     */
    public function listEngines(
    ): ListEnginesResponse
    {
        // TODO: Implement ListEngines
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /engines/{engine_id}
     *
     * Retrieves a model instance, providing basic information about it such as the owner and availability.
     */
    public function retrieveEngine(
        string $engine_id,
    ): RetrieveEngineResponse
    {
        // TODO: Implement RetrieveEngine
        throw new \BadMethodCallException('Not implemented');
    }
}
