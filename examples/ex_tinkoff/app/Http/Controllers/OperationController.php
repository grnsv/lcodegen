<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\OperationController as BaseOperationController;
use App\Http\Requests\OperationsGetRequest;
use App\Http\Responses\OpenApi\OperationsGetResponse;

final class OperationController extends BaseOperationController
{
    /**
     * GET /operations
     *
     * Получение списка операций
     */
    public function operationsGet(
        OperationsGetRequest $request,
    ): OperationsGetResponse
    {
        // TODO: Implement OperationsGet
        throw new \BadMethodCallException('Not implemented');
    }
}
