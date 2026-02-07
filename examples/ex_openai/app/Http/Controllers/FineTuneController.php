<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\FineTuneController as BaseFineTuneController;
use App\Http\Requests\CreateFineTuneRequest;
use App\Http\Requests\ListFineTuneEventsRequest;
use App\Http\Responses\OpenApi\CancelFineTuneResponse;
use App\Http\Responses\OpenApi\CreateFineTuneResponse;
use App\Http\Responses\OpenApi\ListFineTuneEventsResponse;
use App\Http\Responses\OpenApi\ListFineTunesResponse;
use App\Http\Responses\OpenApi\RetrieveFineTuneResponse;

final class FineTuneController extends BaseFineTuneController
{
    /**
     * POST /fine-tunes/{fine_tune_id}/cancel
     *
     * Immediately cancel a fine-tune job.

     */
    public function cancelFineTune(
        string $fine_tune_id,
    ): CancelFineTuneResponse
    {
        // TODO: Implement CancelFineTune
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /fine-tunes
     *
     * Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

     */
    public function createFineTune(
        CreateFineTuneRequest $request,
    ): CreateFineTuneResponse
    {
        // TODO: Implement CreateFineTune
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /fine-tunes/{fine_tune_id}/events
     *
     * Get fine-grained status updates for a fine-tune job.

     */
    public function listFineTuneEvents(
        ListFineTuneEventsRequest $request,
        string $fine_tune_id,
    ): ListFineTuneEventsResponse
    {
        // TODO: Implement ListFineTuneEvents
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /fine-tunes
     *
     * List your organization's fine-tuning jobs

     */
    public function listFineTunes(
    ): ListFineTunesResponse
    {
        // TODO: Implement ListFineTunes
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /fine-tunes/{fine_tune_id}
     *
     * Gets info about the fine-tune job.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

     */
    public function retrieveFineTune(
        string $fine_tune_id,
    ): RetrieveFineTuneResponse
    {
        // TODO: Implement RetrieveFineTune
        throw new \BadMethodCallException('Not implemented');
    }
}
