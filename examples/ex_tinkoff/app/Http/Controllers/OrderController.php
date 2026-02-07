<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OrderController as BaseOrderController;
use App\Http\Requests\OrdersCancelPostRequest;
use App\Http\Requests\OrdersGetRequest;
use App\Http\Requests\OrdersLimitOrderPostRequest;
use App\Http\Requests\OrdersMarketOrderPostRequest;
use App\Http\Responses\OpenApi\OrdersCancelPostResponse;
use App\Http\Responses\OpenApi\OrdersGetResponse;
use App\Http\Responses\OpenApi\OrdersLimitOrderPostResponse;
use App\Http\Responses\OpenApi\OrdersMarketOrderPostResponse;

final class OrderController extends BaseOrderController
{
    /**
     * POST /orders/cancel
     *
     * Отмена заявки
     */
    public function ordersCancelPost(
        OrdersCancelPostRequest $request,
    ): OrdersCancelPostResponse
    {
        // TODO: Implement OrdersCancelPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /orders
     *
     * Получение списка активных заявок
     */
    public function ordersGet(
        OrdersGetRequest $request,
    ): OrdersGetResponse
    {
        // TODO: Implement OrdersGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orders/limit-order
     *
     * Создание лимитной заявки
     */
    public function ordersLimitOrderPost(
        OrdersLimitOrderPostRequest $request,
    ): OrdersLimitOrderPostResponse
    {
        // TODO: Implement OrdersLimitOrderPost
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /orders/market-order
     *
     * Создание рыночной заявки
     */
    public function ordersMarketOrderPost(
        OrdersMarketOrderPostRequest $request,
    ): OrdersMarketOrderPostResponse
    {
        // TODO: Implement OrdersMarketOrderPost
        throw new \BadMethodCallException('Not implemented');
    }
}
