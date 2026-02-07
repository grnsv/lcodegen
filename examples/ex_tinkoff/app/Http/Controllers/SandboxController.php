<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SandboxController as BaseSandboxController;
use App\Http\Requests\SandboxClearPostRequest;
use App\Http\Requests\SandboxCurrenciesBalancePostRequest;
use App\Http\Requests\SandboxPositionsBalancePostRequest;
use App\Http\Requests\SandboxRegisterPostRequest;
use App\Http\Requests\SandboxRemovePostRequest;
use App\Http\Responses\OpenApi\SandboxClearPostResponse;
use App\Http\Responses\OpenApi\SandboxCurrenciesBalancePostResponse;
use App\Http\Responses\OpenApi\SandboxPositionsBalancePostResponse;
use App\Http\Responses\OpenApi\SandboxRegisterPostResponse;
use App\Http\Responses\OpenApi\SandboxRemovePostResponse;

final class SandboxController extends BaseSandboxController
{
    /**
     * POST /sandbox/clear
     *
     * Удаление всех позиций
     */
    public function sandboxClearPost(
        SandboxClearPostRequest $request,
    ): SandboxClearPostResponse
    {
        // TODO: Implement SandboxClearPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /sandbox/currencies/balance
     *
     * Выставление баланса по валютным позициям
     */
    public function sandboxCurrenciesBalancePost(
        SandboxCurrenciesBalancePostRequest $request,
    ): SandboxCurrenciesBalancePostResponse
    {
        // TODO: Implement SandboxCurrenciesBalancePost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /sandbox/positions/balance
     *
     * Выставление баланса по инструментным позициям
     */
    public function sandboxPositionsBalancePost(
        SandboxPositionsBalancePostRequest $request,
    ): SandboxPositionsBalancePostResponse
    {
        // TODO: Implement SandboxPositionsBalancePost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /sandbox/register
     *
     * Регистрация клиента в sandbox
     */
    public function sandboxRegisterPost(
        SandboxRegisterPostRequest $request,
    ): SandboxRegisterPostResponse
    {
        // TODO: Implement SandboxRegisterPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /sandbox/remove
     *
     * Удаление счета
     */
    public function sandboxRemovePost(
        SandboxRemovePostRequest $request,
    ): SandboxRemovePostResponse
    {
        // TODO: Implement SandboxRemovePost
        throw new \BadMethodCallException('Not implemented');
    }
}
