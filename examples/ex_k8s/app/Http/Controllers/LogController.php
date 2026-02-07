<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\LogController as BaseLogController;

final class LogController extends BaseLogController
{
    /**
     * GET /logs/{logpath}
     */
    public function logFileHandler(
        string $logpath,
    ): void
    {
        // TODO: Implement LogFileHandler
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /logs/
     */
    public function logFileListHandler(
    ): void
    {
        // TODO: Implement LogFileListHandler
        throw new \BadMethodCallException('Not implemented');
    }
}
