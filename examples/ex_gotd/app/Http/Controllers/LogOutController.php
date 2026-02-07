<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LogOutController as BaseLogOutController;
use App\Http\Responses\OpenApi\LogOutResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class LogOutController extends BaseLogOutController
{
    /**
     * POST /logOut
     */
    public function logOut(
    ): LogOutResponse|ErrorResponse
    {
        // TODO: Implement LogOut
        throw new \BadMethodCallException('Not implemented');
    }
}
