<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\UserController as BaseUserController;
use App\Http\Requests\UserPassloginPostRequest;
use App\Http\Requests\UserPostingPostRequest;
use App\Http\Requests\UserReportPostRequest;
use App\Http\Responses\OpenApi\UserPassloginPostResponse;
use App\Http\Responses\OpenApi\UserPostingPostResponse;
use App\Http\Responses\OpenApi\UserReportPostResponse;

final class UserController extends BaseUserController
{
    /**
     * POST /user/passlogin
     *
     * Авторизация пасскода.
     */
    public function userPassloginPost(
        UserPassloginPostRequest $request,
    ): UserPassloginPostResponse
    {
        // TODO: Implement UserPassloginPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/posting
     *
     * Создание нового поста или треда.
     */
    public function userPostingPost(
        UserPostingPostRequest $request,
    ): UserPostingPostResponse
    {
        // TODO: Implement UserPostingPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /user/report
     *
     * Отправка жалобы.
     */
    public function userReportPost(
        UserReportPostRequest $request,
    ): UserReportPostResponse
    {
        // TODO: Implement UserReportPost
        throw new \BadMethodCallException('Not implemented');
    }
}
