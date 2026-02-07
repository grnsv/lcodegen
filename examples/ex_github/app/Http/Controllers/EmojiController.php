<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\EmojiController as BaseEmojiController;
use App\Http\Responses\OpenApi\EmojisGetResponse;

final class EmojiController extends BaseEmojiController
{
    /**
     * GET /emojis
     *
     * Get emojis
     */
    public function emojisGet(
    ): EmojisGetResponse
    {
        // TODO: Implement EmojisGet
        throw new \BadMethodCallException('Not implemented');
    }
}
