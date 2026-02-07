<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PetController as BasePetController;
use App\Http\Requests\CreatePetRequest;
use App\Http\Requests\CreatePetCategoriesRequest;
use App\Http\Requests\CreatePetFriendsRequest;
use App\Http\Requests\CreatePetOwnerRequest;
use App\Http\Requests\ListPetRequest;
use App\Http\Requests\ListPetCategoriesRequest;
use App\Http\Requests\ListPetFriendsRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Responses\OpenApi\CreatePetCategoriesResponse;
use App\Http\Responses\OpenApi\CreatePetFriendsResponse;
use App\Http\Responses\OpenApi\CreatePetOwnerResponse;
use App\Http\Responses\OpenApi\CreatePetResponse;
use App\Http\Responses\OpenApi\DeletePetOwnerResponse;
use App\Http\Responses\OpenApi\DeletePetResponse;
use App\Http\Responses\OpenApi\ListPetCategoriesResponse;
use App\Http\Responses\OpenApi\ListPetFriendsResponse;
use App\Http\Responses\OpenApi\ListPetResponse;
use App\Http\Responses\OpenApi\ReadPetOwnerResponse;
use App\Http\Responses\OpenApi\ReadPetResponse;
use App\Http\Responses\OpenApi\UpdatePetResponse;

final class PetController extends BasePetController
{
    /**
     * POST /pets
     *
     * Create a new Pet
     */
    public function createPet(
        CreatePetRequest $request,
    ): CreatePetResponse
    {
        // TODO: Implement CreatePet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /pets/{id}/categories
     *
     * Create a new Category and attach it to the Pet
     */
    public function createPetCategories(
        CreatePetCategoriesRequest $request,
        int $id,
    ): CreatePetCategoriesResponse
    {
        // TODO: Implement CreatePetCategories
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /pets/{id}/friends
     *
     * Create a new Pet and attach it to the Pet
     */
    public function createPetFriends(
        CreatePetFriendsRequest $request,
        int $id,
    ): CreatePetFriendsResponse
    {
        // TODO: Implement CreatePetFriends
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /pets/{id}/owner
     *
     * Create a new User and attach it to the Pet
     */
    public function createPetOwner(
        CreatePetOwnerRequest $request,
        int $id,
    ): CreatePetOwnerResponse
    {
        // TODO: Implement CreatePetOwner
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /pets/{id}
     *
     * Deletes a Pet by ID
     */
    public function deletePet(
        int $id,
    ): DeletePetResponse
    {
        // TODO: Implement DeletePet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /pets/{id}/owner
     *
     * Delete the attached Owner
     */
    public function deletePetOwner(
        int $id,
    ): DeletePetOwnerResponse
    {
        // TODO: Implement DeletePetOwner
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets
     *
     * List Pets
     */
    public function listPet(
        ListPetRequest $request,
    ): ListPetResponse
    {
        // TODO: Implement ListPet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{id}/categories
     *
     * List attached Categories
     */
    public function listPetCategories(
        ListPetCategoriesRequest $request,
        int $id,
    ): ListPetCategoriesResponse
    {
        // TODO: Implement ListPetCategories
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{id}/friends
     *
     * List attached Friends
     */
    public function listPetFriends(
        ListPetFriendsRequest $request,
        int $id,
    ): ListPetFriendsResponse
    {
        // TODO: Implement ListPetFriends
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{id}
     *
     * Find a Pet by ID
     */
    public function readPet(
        int $id,
    ): ReadPetResponse
    {
        // TODO: Implement ReadPet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /pets/{id}/owner
     *
     * Find the attached User
     */
    public function readPetOwner(
        int $id,
    ): ReadPetOwnerResponse
    {
        // TODO: Implement ReadPetOwner
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /pets/{id}
     *
     * Updates a Pet
     */
    public function updatePet(
        UpdatePetRequest $request,
        int $id,
    ): UpdatePetResponse
    {
        // TODO: Implement UpdatePet
        throw new \BadMethodCallException('Not implemented');
    }
}
