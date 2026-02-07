<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\RepositoryController as BaseRepositoryController;
use App\Http\Requests\ActionsCreateOrUpdateEnvironmentSecretRequest;
use App\Http\Requests\ActionsListEnvironmentSecretsRequest;
use App\Http\Requests\ReposListPublicRequest;
use App\Http\Responses\OpenApi\ActionsCreateOrUpdateEnvironmentSecretResponse;
use App\Http\Responses\OpenApi\ActionsDeleteEnvironmentSecretResponse;
use App\Http\Responses\OpenApi\ActionsGetEnvironmentPublicKeyResponse;
use App\Http\Responses\OpenApi\ActionsGetEnvironmentSecretResponse;
use App\Http\Responses\OpenApi\ActionsListEnvironmentSecretsResponse;
use App\Http\Responses\OpenApi\ReposListPublicResponse;

final class RepositoryController extends BaseRepositoryController
{
    /**
     * PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}
     *
     * Create or update an environment secret
     */
    public function actionsCreateOrUpdateEnvironmentSecret(
        ActionsCreateOrUpdateEnvironmentSecretRequest $request,
        int $repository_id,
        string $environment_name,
        string $secret_name,
    ): ActionsCreateOrUpdateEnvironmentSecretResponse
    {
        // TODO: Implement ActionsCreateOrUpdateEnvironmentSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}
     *
     * Delete an environment secret
     */
    public function actionsDeleteEnvironmentSecret(
        int $repository_id,
        string $environment_name,
        string $secret_name,
    ): ActionsDeleteEnvironmentSecretResponse
    {
        // TODO: Implement ActionsDeleteEnvironmentSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key
     *
     * Get an environment public key
     */
    public function actionsGetEnvironmentPublicKey(
        int $repository_id,
        string $environment_name,
    ): ActionsGetEnvironmentPublicKeyResponse
    {
        // TODO: Implement ActionsGetEnvironmentPublicKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}
     *
     * Get an environment secret
     */
    public function actionsGetEnvironmentSecret(
        int $repository_id,
        string $environment_name,
        string $secret_name,
    ): ActionsGetEnvironmentSecretResponse
    {
        // TODO: Implement ActionsGetEnvironmentSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repositories/{repository_id}/environments/{environment_name}/secrets
     *
     * List environment secrets
     */
    public function actionsListEnvironmentSecrets(
        ActionsListEnvironmentSecretsRequest $request,
        int $repository_id,
        string $environment_name,
    ): ActionsListEnvironmentSecretsResponse
    {
        // TODO: Implement ActionsListEnvironmentSecrets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repositories
     *
     * List public repositories
     */
    public function reposListPublic(
        ReposListPublicRequest $request,
    ): ReposListPublicResponse
    {
        // TODO: Implement ReposListPublic
        throw new \BadMethodCallException('Not implemented');
    }
}
