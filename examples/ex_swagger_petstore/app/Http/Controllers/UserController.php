<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UserController as BaseUserController;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateUsersWithListInputRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Responses\OpenApi\CreateUserResponse;
use App\Http\Responses\OpenApi\CreateUsersWithListInputResponse;
use App\Http\Responses\OpenApi\DeleteUserResponse;
use App\Http\Responses\OpenApi\GetUserByNameResponse;
use App\Http\Responses\OpenApi\LoginUserResponse;
use App\Http\Responses\OpenApi\LogoutUserResponse;
use App\Http\Responses\OpenApi\UpdateUserResponse;

final class UserController extends BaseUserController
{
    /**
     * POST /user
     *
     * Create user.
     */
    public function createUser(
        CreateUserRequest $request,
    ): CreateUserResponse
    {
        // TODO: Implement CreateUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/createWithList
     *
     * Creates list of users with given input array.
     */
    public function createUsersWithListInput(
        CreateUsersWithListInputRequest $request,
    ): CreateUsersWithListInputResponse
    {
        // TODO: Implement CreateUsersWithListInput
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /user/{username}
     *
     * Delete user resource.
     */
    public function deleteUser(
        string $username,
    ): DeleteUserResponse
    {
        // TODO: Implement DeleteUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/{username}
     *
     * Get user by user name.
     */
    public function getUserByName(
        string $username,
    ): GetUserByNameResponse
    {
        // TODO: Implement GetUserByName
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/login
     *
     * Logs user into the system.
     */
    public function loginUser(
        LoginUserRequest $request,
    ): LoginUserResponse
    {
        // TODO: Implement LoginUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /user/logout
     *
     * Logs out current logged in user session.
     */
    public function logoutUser(
    ): LogoutUserResponse
    {
        // TODO: Implement LogoutUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /user/{username}
     *
     * Update user resource.
     */
    public function updateUser(
        UpdateUserRequest $request,
        string $username,
    ): UpdateUserResponse
    {
        // TODO: Implement UpdateUser
        throw new \BadMethodCallException('Not implemented');
    }
}
