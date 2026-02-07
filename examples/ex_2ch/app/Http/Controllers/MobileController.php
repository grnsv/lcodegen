<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\MobileController as BaseMobileController;
use App\Http\Responses\OpenApi\ApiMobileV2AfterBoardThreadNumGetResponse;
use App\Http\Responses\OpenApi\ApiMobileV2BoardsGetResponse;
use App\Http\Responses\OpenApi\ApiMobileV2InfoBoardThreadGetResponse;
use App\Http\Responses\OpenApi\ApiMobileV2PostBoardNumGetResponse;

final class MobileController extends BaseMobileController
{
    /**
     * GET /api/mobile/v2/after/{board}/{thread}/{num}
     *
     * Получение постов в треде >= указанного. Не рекомендуется использовать для получения треда целиком, только для проверки новых постов.
     */
    public function apiMobileV2AfterBoardThreadNumGet(
        string $board,
        int $thread,
        int $num,
    ): ApiMobileV2AfterBoardThreadNumGetResponse
    {
        // TODO: Implement ApiMobileV2AfterBoardThreadNumGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/mobile/v2/boards
     *
     * Получение списка досок и их настроек.
     */
    public function apiMobileV2BoardsGet(
    ): ApiMobileV2BoardsGetResponse
    {
        // TODO: Implement ApiMobileV2BoardsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/mobile/v2/info/{board}/{thread}
     *
     * Получение информации о треде.
     */
    public function apiMobileV2InfoBoardThreadGet(
        string $board,
        int $thread,
    ): ApiMobileV2InfoBoardThreadGetResponse
    {
        // TODO: Implement ApiMobileV2InfoBoardThreadGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/mobile/v2/post/{board}/{num}
     *
     * Получение информации о посте.
     */
    public function apiMobileV2PostBoardNumGet(
        string $board,
        int $num,
    ): ApiMobileV2PostBoardNumGetResponse
    {
        // TODO: Implement ApiMobileV2PostBoardNumGet
        throw new \BadMethodCallException('Not implemented');
    }
}
