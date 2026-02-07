<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PetStoreController as BasePetStoreController;
use App\Http\Requests\ListPetsRequest;
use App\Http\Responses\OpenApi\CreatePetsResponse;
use App\Http\Responses\OpenApi\ListPetsResponse;
use App\Http\Responses\OpenApi\ShowPetByIdResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class PetStoreController extends BasePetStoreController
{
    /**
     * POST /pets
     *
     * Create a pet
     */
    public function createPets(
    ): CreatePetsResponse|ErrorResponse
    {
        // TODO: Implement CreatePets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets
     *
     * List all pets
     */
    public function listPets(
        ListPetsRequest $request,
    ): ListPetsResponse|ErrorResponse
    {
        // TODO: Implement ListPets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{petId}
     *
     * Info for a specific pet
     */
    public function showPetById(
        string $petId,
    ): ShowPetByIdResponse|ErrorResponse
    {
        // TODO: Implement ShowPetById
        throw new \BadMethodCallException('Not implemented');
    }
}
