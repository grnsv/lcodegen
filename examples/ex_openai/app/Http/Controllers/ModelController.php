<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ModelController as BaseModelController;
use App\Http\Responses\OpenApi\DeleteModelResponse;
use App\Http\Responses\OpenApi\ListModelsResponse;
use App\Http\Responses\OpenApi\RetrieveModelResponse;

final class ModelController extends BaseModelController
{
    /**
     * DELETE /models/{model}
     *
     * Delete a fine-tuned model. You must have the Owner role in your organization.
     */
    public function deleteModel(
        string $model,
    ): DeleteModelResponse
    {
        // TODO: Implement DeleteModel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /models
     *
     * Lists the currently available models, and provides basic information about each one such as the owner and availability.
     */
    public function listModels(
    ): ListModelsResponse
    {
        // TODO: Implement ListModels
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /models/{model}
     *
     * Retrieves a model instance, providing basic information about the model such as the owner and permissioning.
     */
    public function retrieveModel(
        string $model,
    ): RetrieveModelResponse
    {
        // TODO: Implement RetrieveModel
        throw new \BadMethodCallException('Not implemented');
    }
}
