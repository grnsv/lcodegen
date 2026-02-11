<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\StoreController as BaseStoreController;
use App\Http\Requests\PlaceOrderRequest;
use App\Http\Responses\OpenApi\DeleteOrderResponse;
use App\Http\Responses\OpenApi\GetInventoryResponse;
use App\Http\Responses\OpenApi\GetOrderByIdResponse;
use App\Http\Responses\OpenApi\PlaceOrderResponse;

final class StoreController extends BaseStoreController
{
    /**
     * DELETE /store/order/{orderId}
     *
     * Delete purchase order by identifier.
     */
    public function deleteOrder(
        int $orderId,
    ): DeleteOrderResponse
    {
        // TODO: Implement DeleteOrder
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /store/inventory
     *
     * Returns pet inventories by status.
     */
    public function getInventory(
    ): GetInventoryResponse
    {
        // TODO: Implement GetInventory
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /store/order/{orderId}
     *
     * Find purchase order by ID.
     */
    public function getOrderById(
        int $orderId,
    ): GetOrderByIdResponse
    {
        // TODO: Implement GetOrderById
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /store/order
     *
     * Place an order for a pet.
     */
    public function placeOrder(
        PlaceOrderRequest $request,
    ): PlaceOrderResponse
    {
        // TODO: Implement PlaceOrder
        throw new \BadMethodCallException('Not implemented');
    }
}
