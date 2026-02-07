<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ClassificationController as BaseClassificationController;
use App\Http\Requests\CreateClassificationRequest;
use App\Http\Responses\OpenApi\CreateClassificationResponse;

final class ClassificationController extends BaseClassificationController
{
    /**
     * POST /classifications
     *
     * Classifies the specified `query` using provided examples.

The endpoint first [searches](/docs/api-reference/searches) over the labeled examples
to select the ones most relevant for the particular query. Then, the relevant examples
are combined with the query to construct a prompt to produce the final label via the
[completions](/docs/api-reference/completions) endpoint.

Labeled examples can be provided via an uploaded `file`, or explicitly listed in the
request using the `examples` parameter for quick tests and small scale use cases.

     */
    public function createClassification(
        CreateClassificationRequest $request,
    ): CreateClassificationResponse
    {
        // TODO: Implement CreateClassification
        throw new \BadMethodCallException('Not implemented');
    }
}
