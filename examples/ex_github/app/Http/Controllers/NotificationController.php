<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NotificationController as BaseNotificationController;
use App\Http\Requests\ActivityListNotificationsForAuthenticatedUserRequest;
use App\Http\Requests\ActivityMarkNotificationsAsReadRequest;
use App\Http\Requests\ActivitySetThreadSubscriptionRequest;
use App\Http\Responses\OpenApi\ActivityDeleteThreadSubscriptionResponse;
use App\Http\Responses\OpenApi\ActivityGetThreadResponse;
use App\Http\Responses\OpenApi\ActivityGetThreadSubscriptionForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListNotificationsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityMarkNotificationsAsReadResponse;
use App\Http\Responses\OpenApi\ActivityMarkThreadAsReadResponse;
use App\Http\Responses\OpenApi\ActivitySetThreadSubscriptionResponse;

final class NotificationController extends BaseNotificationController
{
    /**
     * DELETE /notifications/threads/{thread_id}/subscription
     *
     * Delete a thread subscription
     */
    public function activityDeleteThreadSubscription(
        int $thread_id,
    ): ActivityDeleteThreadSubscriptionResponse
    {
        // TODO: Implement ActivityDeleteThreadSubscription
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /notifications/threads/{thread_id}
     *
     * Get a thread
     */
    public function activityGetThread(
        int $thread_id,
    ): ActivityGetThreadResponse
    {
        // TODO: Implement ActivityGetThread
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /notifications/threads/{thread_id}/subscription
     *
     * Get a thread subscription for the authenticated user
     */
    public function activityGetThreadSubscriptionForAuthenticatedUser(
        int $thread_id,
    ): ActivityGetThreadSubscriptionForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityGetThreadSubscriptionForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /notifications
     *
     * List notifications for the authenticated user
     */
    public function activityListNotificationsForAuthenticatedUser(
        ActivityListNotificationsForAuthenticatedUserRequest $request,
    ): ActivityListNotificationsForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListNotificationsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /notifications
     *
     * Mark notifications as read
     */
    public function activityMarkNotificationsAsRead(
        ActivityMarkNotificationsAsReadRequest $request,
    ): ActivityMarkNotificationsAsReadResponse
    {
        // TODO: Implement ActivityMarkNotificationsAsRead
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /notifications/threads/{thread_id}
     *
     * Mark a thread as read
     */
    public function activityMarkThreadAsRead(
        int $thread_id,
    ): ActivityMarkThreadAsReadResponse
    {
        // TODO: Implement ActivityMarkThreadAsRead
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /notifications/threads/{thread_id}/subscription
     *
     * Set a thread subscription
     */
    public function activitySetThreadSubscription(
        ActivitySetThreadSubscriptionRequest $request,
        int $thread_id,
    ): ActivitySetThreadSubscriptionResponse
    {
        // TODO: Implement ActivitySetThreadSubscription
        throw new \BadMethodCallException('Not implemented');
    }
}
