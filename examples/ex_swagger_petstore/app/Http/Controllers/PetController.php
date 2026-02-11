<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PetController as BasePetController;
use App\Http\Requests\AddPetRequest;
use App\Http\Requests\DeletePetRequest;
use App\Http\Requests\FindPetsByStatusRequest;
use App\Http\Requests\FindPetsByTagsRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Requests\UpdatePetWithFormRequest;
use App\Http\Requests\UploadFileRequest;
use App\Http\Responses\OpenApi\AddPetResponse;
use App\Http\Responses\OpenApi\DeletePetResponse;
use App\Http\Responses\OpenApi\FindPetsByStatusResponse;
use App\Http\Responses\OpenApi\FindPetsByTagsResponse;
use App\Http\Responses\OpenApi\GetPetByIdResponse;
use App\Http\Responses\OpenApi\UpdatePetResponse;
use App\Http\Responses\OpenApi\UpdatePetWithFormResponse;
use App\Http\Responses\OpenApi\UploadFileResponse;

final class PetController extends BasePetController
{
    /**
     * POST /pet
     *
     * Add a new pet to the store.
     */
    public function addPet(
        AddPetRequest $request,
    ): AddPetResponse
    {
        // TODO: Implement AddPet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /pet/{petId}
     *
     * Deletes a pet.
     */
    public function deletePet(
        DeletePetRequest $request,
        int $petId,
    ): DeletePetResponse
    {
        // TODO: Implement DeletePet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pet/findByStatus
     *
     * Finds Pets by status.
     */
    public function findPetsByStatus(
        FindPetsByStatusRequest $request,
    ): FindPetsByStatusResponse
    {
        // TODO: Implement FindPetsByStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pet/findByTags
     *
     * Finds Pets by tags.
     */
    public function findPetsByTags(
        FindPetsByTagsRequest $request,
    ): FindPetsByTagsResponse
    {
        // TODO: Implement FindPetsByTags
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pet/{petId}
     *
     * Find pet by ID.
     */
    public function getPetById(
        int $petId,
    ): GetPetByIdResponse
    {
        // TODO: Implement GetPetById
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /pet
     *
     * Update an existing pet.
     */
    public function updatePet(
        UpdatePetRequest $request,
    ): UpdatePetResponse
    {
        // TODO: Implement UpdatePet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /pet/{petId}
     *
     * Updates a pet in the store with form data.
     */
    public function updatePetWithForm(
        UpdatePetWithFormRequest $request,
        int $petId,
    ): UpdatePetWithFormResponse
    {
        // TODO: Implement UpdatePetWithForm
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /pet/{petId}/uploadImage
     *
     * Uploads an image.
     */
    public function uploadFile(
        UploadFileRequest $request,
        int $petId,
    ): UploadFileResponse
    {
        // TODO: Implement UploadFile
        throw new \BadMethodCallException('Not implemented');
    }
}
