<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PetController as BasePetController;
use App\Http\Requests\AddPetRequest;
use App\Http\Requests\FindPetsRequest;
use App\Http\Responses\OpenApi\AddPetResponse;
use App\Http\Responses\OpenApi\DeletePetResponse;
use App\Http\Responses\OpenApi\FindPetByIdResponse;
use App\Http\Responses\OpenApi\FindPetsResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class PetController extends BasePetController
{
    /**
     * POST /pets
     */
    public function addPet(
        AddPetRequest $request,
    ): AddPetResponse|ErrorResponse
    {
        // TODO: Implement AddPet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /pets/{id}
     */
    public function deletePet(
        int $id,
    ): DeletePetResponse|ErrorResponse
    {
        // TODO: Implement DeletePet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{id}
     */
    public function findPetById(
        int $id,
    ): FindPetByIdResponse|ErrorResponse
    {
        // TODO: Implement FindPetById
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets
     */
    public function findPets(
        FindPetsRequest $request,
    ): FindPetsResponse|ErrorResponse
    {
        // TODO: Implement FindPets
        throw new \BadMethodCallException('Not implemented');
    }
}
