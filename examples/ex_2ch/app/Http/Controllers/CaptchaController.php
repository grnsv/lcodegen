<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\CaptchaController as BaseCaptchaController;
use App\Http\Requests\ApiCaptcha2chcaptchaIdGetRequest;
use App\Http\Requests\ApiCaptcha2chcaptchaShowGetRequest;
use App\Http\Requests\ApiCaptchaAppIdPublicKeyGetRequest;
use App\Http\Requests\ApiCaptchaInvisibleRecaptchaIdGetRequest;
use App\Http\Requests\ApiCaptchaRecaptchaIdGetRequest;
use App\Http\Responses\OpenApi\ApiCaptcha2chcaptchaIdGetResponse;
use App\Http\Responses\OpenApi\ApiCaptcha2chcaptchaShowGetResponse;
use App\Http\Responses\OpenApi\ApiCaptchaAppIdPublicKeyGetResponse;
use App\Http\Responses\OpenApi\ApiCaptchaInvisibleRecaptchaIdGetResponse;
use App\Http\Responses\OpenApi\ApiCaptchaInvisibleRecaptchaMobileGetResponse;
use App\Http\Responses\OpenApi\ApiCaptchaRecaptchaIdGetResponse;
use App\Http\Responses\OpenApi\ApiCaptchaRecaptchaMobileGetResponse;

final class CaptchaController extends BaseCaptchaController
{
    /**
     * GET /api/captcha/2chcaptcha/id
     *
     * Получение ид для использования 2chcaptcha.
     */
    public function apiCaptcha2chcaptchaIdGet(
        ApiCaptcha2chcaptchaIdGetRequest $request,
    ): ApiCaptcha2chcaptchaIdGetResponse
    {
        // TODO: Implement ApiCaptcha2chcaptchaIdGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/2chcaptcha/show
     *
     * Отображение 2chcaptcha по id.
     */
    public function apiCaptcha2chcaptchaShowGet(
        ApiCaptcha2chcaptchaShowGetRequest $request,
    ): ApiCaptcha2chcaptchaShowGetResponse
    {
        // TODO: Implement ApiCaptcha2chcaptchaShowGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/app/id/{public_key}
     *
     * Получение app_response_id для отправки поста.
     */
    public function apiCaptchaAppIdPublicKeyGet(
        ApiCaptchaAppIdPublicKeyGetRequest $request,
        string $public_key,
    ): ApiCaptchaAppIdPublicKeyGetResponse
    {
        // TODO: Implement ApiCaptchaAppIdPublicKeyGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/invisible_recaptcha/id
     *
     * Получение публичного ключа invisible recaptcha.
     */
    public function apiCaptchaInvisibleRecaptchaIdGet(
        ApiCaptchaInvisibleRecaptchaIdGetRequest $request,
    ): ApiCaptchaInvisibleRecaptchaIdGetResponse
    {
        // TODO: Implement ApiCaptchaInvisibleRecaptchaIdGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/invisible_recaptcha/mobile
     *
     * Получение html страницы для решения капчи, CORS отключён.
     */
    public function apiCaptchaInvisibleRecaptchaMobileGet(
    ): ApiCaptchaInvisibleRecaptchaMobileGetResponse
    {
        // TODO: Implement ApiCaptchaInvisibleRecaptchaMobileGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/recaptcha/id
     *
     * Получение публичного ключа recaptcha v2.
     */
    public function apiCaptchaRecaptchaIdGet(
        ApiCaptchaRecaptchaIdGetRequest $request,
    ): ApiCaptchaRecaptchaIdGetResponse
    {
        // TODO: Implement ApiCaptchaRecaptchaIdGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/captcha/recaptcha/mobile
     *
     * Получение html страницы для решения капчи, CORS отключён.
     */
    public function apiCaptchaRecaptchaMobileGet(
    ): ApiCaptchaRecaptchaMobileGetResponse
    {
        // TODO: Implement ApiCaptchaRecaptchaMobileGet
        throw new \BadMethodCallException('Not implemented');
    }
}
