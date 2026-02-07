<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MarketController as BaseMarketController;
use App\Http\Requests\MarketCandlesGetRequest;
use App\Http\Requests\MarketOrderbookGetRequest;
use App\Http\Requests\MarketSearchByFigiGetRequest;
use App\Http\Requests\MarketSearchByTickerGetRequest;
use App\Http\Responses\OpenApi\MarketBondsGetResponse;
use App\Http\Responses\OpenApi\MarketCandlesGetResponse;
use App\Http\Responses\OpenApi\MarketCurrenciesGetResponse;
use App\Http\Responses\OpenApi\MarketEtfsGetResponse;
use App\Http\Responses\OpenApi\MarketOrderbookGetResponse;
use App\Http\Responses\OpenApi\MarketSearchByFigiGetResponse;
use App\Http\Responses\OpenApi\MarketSearchByTickerGetResponse;
use App\Http\Responses\OpenApi\MarketStocksGetResponse;

final class MarketController extends BaseMarketController
{
    /**
     * GET /market/bonds
     *
     * Получение списка облигаций
     */
    public function marketBondsGet(
    ): MarketBondsGetResponse
    {
        // TODO: Implement MarketBondsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/candles
     *
     * Получение исторических свечей по FIGI
     */
    public function marketCandlesGet(
        MarketCandlesGetRequest $request,
    ): MarketCandlesGetResponse
    {
        // TODO: Implement MarketCandlesGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/currencies
     *
     * Получение списка валютных пар
     */
    public function marketCurrenciesGet(
    ): MarketCurrenciesGetResponse
    {
        // TODO: Implement MarketCurrenciesGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/etfs
     *
     * Получение списка ETF
     */
    public function marketEtfsGet(
    ): MarketEtfsGetResponse
    {
        // TODO: Implement MarketEtfsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/orderbook
     *
     * Получение стакана по FIGI
     */
    public function marketOrderbookGet(
        MarketOrderbookGetRequest $request,
    ): MarketOrderbookGetResponse
    {
        // TODO: Implement MarketOrderbookGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/search/by-figi
     *
     * Получение инструмента по FIGI
     */
    public function marketSearchByFigiGet(
        MarketSearchByFigiGetRequest $request,
    ): MarketSearchByFigiGetResponse
    {
        // TODO: Implement MarketSearchByFigiGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/search/by-ticker
     *
     * Получение инструмента по тикеру
     */
    public function marketSearchByTickerGet(
        MarketSearchByTickerGetRequest $request,
    ): MarketSearchByTickerGetResponse
    {
        // TODO: Implement MarketSearchByTickerGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /market/stocks
     *
     * Получение списка акций
     */
    public function marketStocksGet(
    ): MarketStocksGetResponse
    {
        // TODO: Implement MarketStocksGet
        throw new \BadMethodCallException('Not implemented');
    }
}
