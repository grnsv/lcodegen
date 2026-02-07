<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\FileController as BaseFileController;
use App\Http\Requests\CreateFileRequest;
use App\Http\Responses\OpenApi\CreateFileResponse;
use App\Http\Responses\OpenApi\DeleteFileResponse;
use App\Http\Responses\OpenApi\DownloadFileResponse;
use App\Http\Responses\OpenApi\ListFilesResponse;
use App\Http\Responses\OpenApi\RetrieveFileResponse;

final class FileController extends BaseFileController
{
    /**
     * POST /files
     *
     * Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.

     */
    public function createFile(
        CreateFileRequest $request,
    ): CreateFileResponse
    {
        // TODO: Implement CreateFile
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /files/{file_id}
     *
     * Delete a file.
     */
    public function deleteFile(
        string $file_id,
    ): DeleteFileResponse
    {
        // TODO: Implement DeleteFile
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /files/{file_id}/content
     *
     * Returns the contents of the specified file
     */
    public function downloadFile(
        string $file_id,
    ): DownloadFileResponse
    {
        // TODO: Implement DownloadFile
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /files
     *
     * Returns a list of files that belong to the user's organization.
     */
    public function listFiles(
    ): ListFilesResponse
    {
        // TODO: Implement ListFiles
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /files/{file_id}
     *
     * Returns information about a specific file.
     */
    public function retrieveFile(
        string $file_id,
    ): RetrieveFileResponse
    {
        // TODO: Implement RetrieveFile
        throw new \BadMethodCallException('Not implemented');
    }
}
