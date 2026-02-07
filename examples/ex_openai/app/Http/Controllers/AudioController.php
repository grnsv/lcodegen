<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\AudioController as BaseAudioController;
use App\Http\Requests\CreateTranscriptionRequest;
use App\Http\Requests\CreateTranslationRequest;
use App\Http\Responses\OpenApi\CreateTranscriptionResponse;
use App\Http\Responses\OpenApi\CreateTranslationResponse;

final class AudioController extends BaseAudioController
{
    /**
     * POST /audio/transcriptions
     *
     * Transcribes audio into the input language.
     */
    public function createTranscription(
        CreateTranscriptionRequest $request,
    ): CreateTranscriptionResponse
    {
        // TODO: Implement CreateTranscription
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /audio/translations
     *
     * Translates audio into into English.
     */
    public function createTranslation(
        CreateTranslationRequest $request,
    ): CreateTranslationResponse
    {
        // TODO: Implement CreateTranslation
        throw new \BadMethodCallException('Not implemented');
    }
}
