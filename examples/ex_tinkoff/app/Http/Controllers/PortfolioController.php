<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\PortfolioController as BasePortfolioController;
use App\Http\Requests\PortfolioCurrenciesGetRequest;
use App\Http\Requests\PortfolioGetRequest;
use App\Http\Responses\OpenApi\PortfolioCurrenciesGetResponse;
use App\Http\Responses\OpenApi\PortfolioGetResponse;

final class PortfolioController extends BasePortfolioController
{
    /**
     * GET /portfolio/currencies
     *
     * Получение валютных активов клиента
     */
    public function portfolioCurrenciesGet(
        PortfolioCurrenciesGetRequest $request,
    ): PortfolioCurrenciesGetResponse
    {
        // TODO: Implement PortfolioCurrenciesGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /portfolio
     *
     * Получение портфеля клиента
     */
    public function portfolioGet(
        PortfolioGetRequest $request,
    ): PortfolioGetResponse
    {
        // TODO: Implement PortfolioGet
        throw new \BadMethodCallException('Not implemented');
    }
}
