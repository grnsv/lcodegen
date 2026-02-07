<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\GalleryController as BaseGalleryController;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\SearchByTagIDRequest;
use App\Http\Responses\OpenApi\GetBookResponse;
use App\Http\Responses\OpenApi\GetPageCoverImageResponse;
use App\Http\Responses\OpenApi\GetPageImageResponse;
use App\Http\Responses\OpenApi\GetPageThumbnailImageResponse;
use App\Http\Responses\OpenApi\SearchByTagIDResponse;
use App\Http\Responses\OpenApi\SearchResponse;

final class GalleryController extends BaseGalleryController
{
    /**
     * GET /api/gallery/{book_id}
     *
     * Gets metadata of book
     */
    public function getBook(
        int $book_id,
    ): GetBookResponse
    {
        // TODO: Implement GetBook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /galleries/{media_id}/cover.{format}
     *
     * Gets page cover
     */
    public function getPageCoverImage(
        int $media_id,
        string $format,
    ): GetPageCoverImageResponse
    {
        // TODO: Implement GetPageCoverImage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /galleries/{media_id}/{page}.{format}
     *
     * Gets page
     */
    public function getPageImage(
        int $media_id,
        int $page,
        string $format,
    ): GetPageImageResponse
    {
        // TODO: Implement GetPageImage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /galleries/{media_id}/{page}t.{format}
     *
     * Gets page thumbnail
     */
    public function getPageThumbnailImage(
        int $media_id,
        int $page,
        string $format,
    ): GetPageThumbnailImageResponse
    {
        // TODO: Implement GetPageThumbnailImage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/galleries/search
     *
     * Search for comics
     */
    public function search(
        SearchRequest $request,
    ): SearchResponse
    {
        // TODO: Implement Search
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/galleries/tagged
     *
     * Search for comics by tag ID
     */
    public function searchByTagID(
        SearchByTagIDRequest $request,
    ): SearchByTagIDResponse
    {
        // TODO: Implement SearchByTagID
        throw new \BadMethodCallException('Not implemented');
    }
}
