<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ReactionController as BaseReactionController;
use App\Http\Responses\OpenApi\ReactionsDeleteLegacyResponse;

final class ReactionController extends BaseReactionController
{
    /**
     * DELETE /reactions/{reaction_id}
     *
     * Delete a reaction (Legacy)
     */
    public function reactionsDeleteLegacy(
        int $reaction_id,
    ): ReactionsDeleteLegacyResponse
    {
        // TODO: Implement ReactionsDeleteLegacy
        throw new \BadMethodCallException('Not implemented');
    }
}
