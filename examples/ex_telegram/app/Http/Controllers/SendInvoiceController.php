<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\SendInvoiceController as BaseSendInvoiceController;
use App\Http\Requests\SendInvoiceRequest;
use App\Http\Responses\OpenApi\SendInvoiceResponse;
use App\Http\Responses\OpenApi\ErrorResponse;

final class SendInvoiceController extends BaseSendInvoiceController
{
    /**
     * POST /sendInvoice
     */
    public function sendInvoice(
        SendInvoiceRequest $request,
    ): SendInvoiceResponse|ErrorResponse
    {
        // TODO: Implement SendInvoice
        throw new \BadMethodCallException('Not implemented');
    }
}
