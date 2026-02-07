<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UserController as BaseUserController;
use App\Http\Responses\OpenApi\UserAccountsGetResponse;

final class UserController extends BaseUserController
{
    /**
     * GET /user/accounts
     *
     * Получение брокерских счетов клиента
     */
    public function userAccountsGet(
    ): UserAccountsGetResponse
    {
        // TODO: Implement UserAccountsGet
        throw new \BadMethodCallException('Not implemented');
    }
}
