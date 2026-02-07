<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EditController as BaseEditController;
use App\Http\Requests\CreateEditRequest;
use App\Http\Responses\OpenApi\CreateEditResponse;

final class EditController extends BaseEditController
{
    /**
     * POST /edits
     *
     * Creates a new edit for the provided input, instruction, and parameters.
     */
    public function createEdit(
        CreateEditRequest $request,
    ): CreateEditResponse
    {
        // TODO: Implement CreateEdit
        throw new \BadMethodCallException('Not implemented');
    }
}
