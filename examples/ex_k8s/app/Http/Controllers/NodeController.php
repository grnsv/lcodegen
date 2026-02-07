<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NodeController as BaseNodeController;
use App\Http\Requests\ConnectCoreV1DeleteNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1DeleteNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1GetNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1GetNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1HeadNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1HeadNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1OptionsNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1OptionsNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PatchNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1PatchNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PostNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1PostNodeProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PutNodeProxyRequest;
use App\Http\Requests\ConnectCoreV1PutNodeProxyWithPathRequest;
use App\Http\Requests\ListCoreV1NodeRequest;
use App\Http\Requests\PatchCoreV1NodeRequest;
use App\Http\Requests\PatchCoreV1NodeStatusRequest;
use App\Http\Requests\ReadCoreV1NodeRequest;
use App\Http\Requests\ReadCoreV1NodeStatusRequest;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNodeProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNodeProxyWithPathResponse;
use App\Http\Responses\OpenApi\ListCoreV1NodeResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NodeResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NodeStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NodeResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NodeStatusResponse;

final class NodeController extends BaseNodeController
{
    /**
     * DELETE /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1DeleteNodeProxy(
        ConnectCoreV1DeleteNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1DeleteNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1DeleteNodeProxyWithPath(
        ConnectCoreV1DeleteNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1DeleteNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1GetNodeProxy(
        ConnectCoreV1GetNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1GetNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1GetNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1GetNodeProxyWithPath(
        ConnectCoreV1GetNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1GetNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1GetNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1HeadNodeProxy(
        ConnectCoreV1HeadNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1HeadNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1HeadNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1HeadNodeProxyWithPath(
        ConnectCoreV1HeadNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1HeadNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1HeadNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1OptionsNodeProxy(
        ConnectCoreV1OptionsNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1OptionsNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1OptionsNodeProxyWithPath(
        ConnectCoreV1OptionsNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1OptionsNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1PatchNodeProxy(
        ConnectCoreV1PatchNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1PatchNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1PatchNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1PatchNodeProxyWithPath(
        ConnectCoreV1PatchNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1PatchNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PatchNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1PostNodeProxy(
        ConnectCoreV1PostNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1PostNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1PostNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1PostNodeProxyWithPath(
        ConnectCoreV1PostNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1PostNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PostNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/nodes/{name}/proxy
     */
    public function connectCoreV1PutNodeProxy(
        ConnectCoreV1PutNodeProxyRequest $request,
        string $name,
    ): ConnectCoreV1PutNodeProxyResponse
    {
        // TODO: Implement ConnectCoreV1PutNodeProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/nodes/{name}/proxy/{path}
     */
    public function connectCoreV1PutNodeProxyWithPath(
        ConnectCoreV1PutNodeProxyWithPathRequest $request,
        string $name,
        string $path,
    ): ConnectCoreV1PutNodeProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PutNodeProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/nodes
     */
    public function listCoreV1Node(
        ListCoreV1NodeRequest $request,
    ): ListCoreV1NodeResponse
    {
        // TODO: Implement ListCoreV1Node
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/nodes/{name}
     */
    public function patchCoreV1Node(
        PatchCoreV1NodeRequest $request,
        string $name,
    ): PatchCoreV1NodeResponse
    {
        // TODO: Implement PatchCoreV1Node
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/nodes/{name}/status
     */
    public function patchCoreV1NodeStatus(
        PatchCoreV1NodeStatusRequest $request,
        string $name,
    ): PatchCoreV1NodeStatusResponse
    {
        // TODO: Implement PatchCoreV1NodeStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/nodes/{name}
     */
    public function readCoreV1Node(
        ReadCoreV1NodeRequest $request,
        string $name,
    ): ReadCoreV1NodeResponse
    {
        // TODO: Implement ReadCoreV1Node
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/nodes/{name}/status
     */
    public function readCoreV1NodeStatus(
        ReadCoreV1NodeStatusRequest $request,
        string $name,
    ): ReadCoreV1NodeStatusResponse
    {
        // TODO: Implement ReadCoreV1NodeStatus
        throw new \BadMethodCallException('Not implemented');
    }
}
