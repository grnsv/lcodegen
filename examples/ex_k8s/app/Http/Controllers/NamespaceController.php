<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\NamespaceController as BaseNamespaceController;
use App\Http\Requests\ConnectCoreV1DeleteNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1DeleteNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1DeleteNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1DeleteNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedPodAttachRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedPodExecRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedPodPortforwardRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1GetNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1HeadNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1HeadNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1HeadNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1HeadNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1OptionsNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1OptionsNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1OptionsNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1OptionsNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PatchNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1PatchNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PatchNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1PatchNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedPodAttachRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedPodExecRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedPodPortforwardRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1PostNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PutNamespacedPodProxyRequest;
use App\Http\Requests\ConnectCoreV1PutNamespacedPodProxyWithPathRequest;
use App\Http\Requests\ConnectCoreV1PutNamespacedServiceProxyRequest;
use App\Http\Requests\ConnectCoreV1PutNamespacedServiceProxyWithPathRequest;
use App\Http\Requests\ListCoreV1NamespaceRequest;
use App\Http\Requests\ListCoreV1NamespacedConfigMapRequest;
use App\Http\Requests\ListCoreV1NamespacedEndpointsRequest;
use App\Http\Requests\ListCoreV1NamespacedEventRequest;
use App\Http\Requests\ListCoreV1NamespacedLimitRangeRequest;
use App\Http\Requests\ListCoreV1NamespacedPersistentVolumeClaimRequest;
use App\Http\Requests\ListCoreV1NamespacedPodRequest;
use App\Http\Requests\ListCoreV1NamespacedPodTemplateRequest;
use App\Http\Requests\ListCoreV1NamespacedReplicationControllerRequest;
use App\Http\Requests\ListCoreV1NamespacedResourceQuotaRequest;
use App\Http\Requests\ListCoreV1NamespacedSecretRequest;
use App\Http\Requests\ListCoreV1NamespacedServiceRequest;
use App\Http\Requests\ListCoreV1NamespacedServiceAccountRequest;
use App\Http\Requests\PatchCoreV1NamespaceRequest;
use App\Http\Requests\PatchCoreV1NamespaceStatusRequest;
use App\Http\Requests\PatchCoreV1NamespacedConfigMapRequest;
use App\Http\Requests\PatchCoreV1NamespacedEndpointsRequest;
use App\Http\Requests\PatchCoreV1NamespacedEventRequest;
use App\Http\Requests\PatchCoreV1NamespacedLimitRangeRequest;
use App\Http\Requests\PatchCoreV1NamespacedPersistentVolumeClaimRequest;
use App\Http\Requests\PatchCoreV1NamespacedPersistentVolumeClaimStatusRequest;
use App\Http\Requests\PatchCoreV1NamespacedPodRequest;
use App\Http\Requests\PatchCoreV1NamespacedPodEphemeralcontainersRequest;
use App\Http\Requests\PatchCoreV1NamespacedPodStatusRequest;
use App\Http\Requests\PatchCoreV1NamespacedPodTemplateRequest;
use App\Http\Requests\PatchCoreV1NamespacedReplicationControllerRequest;
use App\Http\Requests\PatchCoreV1NamespacedReplicationControllerScaleRequest;
use App\Http\Requests\PatchCoreV1NamespacedReplicationControllerStatusRequest;
use App\Http\Requests\PatchCoreV1NamespacedResourceQuotaRequest;
use App\Http\Requests\PatchCoreV1NamespacedResourceQuotaStatusRequest;
use App\Http\Requests\PatchCoreV1NamespacedSecretRequest;
use App\Http\Requests\PatchCoreV1NamespacedServiceRequest;
use App\Http\Requests\PatchCoreV1NamespacedServiceAccountRequest;
use App\Http\Requests\PatchCoreV1NamespacedServiceStatusRequest;
use App\Http\Requests\ReadCoreV1NamespaceRequest;
use App\Http\Requests\ReadCoreV1NamespaceStatusRequest;
use App\Http\Requests\ReadCoreV1NamespacedConfigMapRequest;
use App\Http\Requests\ReadCoreV1NamespacedEndpointsRequest;
use App\Http\Requests\ReadCoreV1NamespacedEventRequest;
use App\Http\Requests\ReadCoreV1NamespacedLimitRangeRequest;
use App\Http\Requests\ReadCoreV1NamespacedPersistentVolumeClaimRequest;
use App\Http\Requests\ReadCoreV1NamespacedPersistentVolumeClaimStatusRequest;
use App\Http\Requests\ReadCoreV1NamespacedPodRequest;
use App\Http\Requests\ReadCoreV1NamespacedPodEphemeralcontainersRequest;
use App\Http\Requests\ReadCoreV1NamespacedPodLogRequest;
use App\Http\Requests\ReadCoreV1NamespacedPodStatusRequest;
use App\Http\Requests\ReadCoreV1NamespacedPodTemplateRequest;
use App\Http\Requests\ReadCoreV1NamespacedReplicationControllerRequest;
use App\Http\Requests\ReadCoreV1NamespacedReplicationControllerScaleRequest;
use App\Http\Requests\ReadCoreV1NamespacedReplicationControllerStatusRequest;
use App\Http\Requests\ReadCoreV1NamespacedResourceQuotaRequest;
use App\Http\Requests\ReadCoreV1NamespacedResourceQuotaStatusRequest;
use App\Http\Requests\ReadCoreV1NamespacedSecretRequest;
use App\Http\Requests\ReadCoreV1NamespacedServiceRequest;
use App\Http\Requests\ReadCoreV1NamespacedServiceAccountRequest;
use App\Http\Requests\ReadCoreV1NamespacedServiceStatusRequest;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1DeleteNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedPodAttachResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedPodExecResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedPodPortforwardResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1GetNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1HeadNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1OptionsNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PatchNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedPodAttachResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedPodExecResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedPodPortforwardResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PostNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNamespacedPodProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNamespacedPodProxyWithPathResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNamespacedServiceProxyResponse;
use App\Http\Responses\OpenApi\ConnectCoreV1PutNamespacedServiceProxyWithPathResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespaceResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedConfigMapResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedEndpointsResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedEventResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedLimitRangeResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedPersistentVolumeClaimResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedPodResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedPodTemplateResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedReplicationControllerResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedResourceQuotaResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedSecretResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedServiceAccountResponse;
use App\Http\Responses\OpenApi\ListCoreV1NamespacedServiceResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespaceResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespaceStatusResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedConfigMapResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedEndpointsResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedEventResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedLimitRangeResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPersistentVolumeClaimResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPersistentVolumeClaimStatusResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPodEphemeralcontainersResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPodResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPodStatusResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedPodTemplateResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedReplicationControllerResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedReplicationControllerScaleResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedReplicationControllerStatusResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedResourceQuotaResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedResourceQuotaStatusResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedSecretResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedServiceAccountResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedServiceResponse;
use App\Http\Responses\OpenApi\PatchCoreV1NamespacedServiceStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespaceResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespaceStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedConfigMapResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedEndpointsResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedEventResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedLimitRangeResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPersistentVolumeClaimResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPersistentVolumeClaimStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPodEphemeralcontainersResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPodLogResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPodResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPodStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedPodTemplateResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedReplicationControllerResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedReplicationControllerScaleResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedReplicationControllerStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedResourceQuotaResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedResourceQuotaStatusResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedSecretResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedServiceAccountResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedServiceResponse;
use App\Http\Responses\OpenApi\ReadCoreV1NamespacedServiceStatusResponse;

final class NamespaceController extends BaseNamespaceController
{
    /**
     * DELETE /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1DeleteNamespacedPodProxy(
        ConnectCoreV1DeleteNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1DeleteNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1DeleteNamespacedPodProxyWithPath(
        ConnectCoreV1DeleteNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1DeleteNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1DeleteNamespacedServiceProxy(
        ConnectCoreV1DeleteNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1DeleteNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1DeleteNamespacedServiceProxyWithPath(
        ConnectCoreV1DeleteNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1DeleteNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1DeleteNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/attach
     */
    public function connectCoreV1GetNamespacedPodAttach(
        ConnectCoreV1GetNamespacedPodAttachRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1GetNamespacedPodAttachResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedPodAttach
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/exec
     */
    public function connectCoreV1GetNamespacedPodExec(
        ConnectCoreV1GetNamespacedPodExecRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1GetNamespacedPodExecResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedPodExec
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/portforward
     */
    public function connectCoreV1GetNamespacedPodPortforward(
        ConnectCoreV1GetNamespacedPodPortforwardRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1GetNamespacedPodPortforwardResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedPodPortforward
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1GetNamespacedPodProxy(
        ConnectCoreV1GetNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1GetNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1GetNamespacedPodProxyWithPath(
        ConnectCoreV1GetNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1GetNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1GetNamespacedServiceProxy(
        ConnectCoreV1GetNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1GetNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1GetNamespacedServiceProxyWithPath(
        ConnectCoreV1GetNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1GetNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1GetNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1HeadNamespacedPodProxy(
        ConnectCoreV1HeadNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1HeadNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1HeadNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1HeadNamespacedPodProxyWithPath(
        ConnectCoreV1HeadNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1HeadNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1HeadNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1HeadNamespacedServiceProxy(
        ConnectCoreV1HeadNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1HeadNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1HeadNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * HEAD /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1HeadNamespacedServiceProxyWithPath(
        ConnectCoreV1HeadNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1HeadNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1HeadNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1OptionsNamespacedPodProxy(
        ConnectCoreV1OptionsNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1OptionsNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1OptionsNamespacedPodProxyWithPath(
        ConnectCoreV1OptionsNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1OptionsNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1OptionsNamespacedServiceProxy(
        ConnectCoreV1OptionsNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1OptionsNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * OPTIONS /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1OptionsNamespacedServiceProxyWithPath(
        ConnectCoreV1OptionsNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1OptionsNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1OptionsNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1PatchNamespacedPodProxy(
        ConnectCoreV1PatchNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PatchNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1PatchNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1PatchNamespacedPodProxyWithPath(
        ConnectCoreV1PatchNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PatchNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PatchNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1PatchNamespacedServiceProxy(
        ConnectCoreV1PatchNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PatchNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1PatchNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1PatchNamespacedServiceProxyWithPath(
        ConnectCoreV1PatchNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PatchNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PatchNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/pods/{name}/attach
     */
    public function connectCoreV1PostNamespacedPodAttach(
        ConnectCoreV1PostNamespacedPodAttachRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PostNamespacedPodAttachResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedPodAttach
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/pods/{name}/exec
     */
    public function connectCoreV1PostNamespacedPodExec(
        ConnectCoreV1PostNamespacedPodExecRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PostNamespacedPodExecResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedPodExec
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/pods/{name}/portforward
     */
    public function connectCoreV1PostNamespacedPodPortforward(
        ConnectCoreV1PostNamespacedPodPortforwardRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PostNamespacedPodPortforwardResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedPodPortforward
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1PostNamespacedPodProxy(
        ConnectCoreV1PostNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PostNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1PostNamespacedPodProxyWithPath(
        ConnectCoreV1PostNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PostNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1PostNamespacedServiceProxy(
        ConnectCoreV1PostNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PostNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1PostNamespacedServiceProxyWithPath(
        ConnectCoreV1PostNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PostNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PostNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/namespaces/{namespace}/pods/{name}/proxy
     */
    public function connectCoreV1PutNamespacedPodProxy(
        ConnectCoreV1PutNamespacedPodProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PutNamespacedPodProxyResponse
    {
        // TODO: Implement ConnectCoreV1PutNamespacedPodProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}
     */
    public function connectCoreV1PutNamespacedPodProxyWithPath(
        ConnectCoreV1PutNamespacedPodProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PutNamespacedPodProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PutNamespacedPodProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/namespaces/{namespace}/services/{name}/proxy
     */
    public function connectCoreV1PutNamespacedServiceProxy(
        ConnectCoreV1PutNamespacedServiceProxyRequest $request,
        string $name,
        string $namespace,
    ): ConnectCoreV1PutNamespacedServiceProxyResponse
    {
        // TODO: Implement ConnectCoreV1PutNamespacedServiceProxy
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /api/v1/namespaces/{namespace}/services/{name}/proxy/{path}
     */
    public function connectCoreV1PutNamespacedServiceProxyWithPath(
        ConnectCoreV1PutNamespacedServiceProxyWithPathRequest $request,
        string $name,
        string $namespace,
        string $path,
    ): ConnectCoreV1PutNamespacedServiceProxyWithPathResponse
    {
        // TODO: Implement ConnectCoreV1PutNamespacedServiceProxyWithPath
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces
     */
    public function listCoreV1Namespace(
        ListCoreV1NamespaceRequest $request,
    ): ListCoreV1NamespaceResponse
    {
        // TODO: Implement ListCoreV1Namespace
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/configmaps
     */
    public function listCoreV1NamespacedConfigMap(
        ListCoreV1NamespacedConfigMapRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedConfigMapResponse
    {
        // TODO: Implement ListCoreV1NamespacedConfigMap
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/endpoints
     */
    public function listCoreV1NamespacedEndpoints(
        ListCoreV1NamespacedEndpointsRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedEndpointsResponse
    {
        // TODO: Implement ListCoreV1NamespacedEndpoints
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/events
     */
    public function listCoreV1NamespacedEvent(
        ListCoreV1NamespacedEventRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedEventResponse
    {
        // TODO: Implement ListCoreV1NamespacedEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/limitranges
     */
    public function listCoreV1NamespacedLimitRange(
        ListCoreV1NamespacedLimitRangeRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedLimitRangeResponse
    {
        // TODO: Implement ListCoreV1NamespacedLimitRange
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/persistentvolumeclaims
     */
    public function listCoreV1NamespacedPersistentVolumeClaim(
        ListCoreV1NamespacedPersistentVolumeClaimRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedPersistentVolumeClaimResponse
    {
        // TODO: Implement ListCoreV1NamespacedPersistentVolumeClaim
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods
     */
    public function listCoreV1NamespacedPod(
        ListCoreV1NamespacedPodRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedPodResponse
    {
        // TODO: Implement ListCoreV1NamespacedPod
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/podtemplates
     */
    public function listCoreV1NamespacedPodTemplate(
        ListCoreV1NamespacedPodTemplateRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedPodTemplateResponse
    {
        // TODO: Implement ListCoreV1NamespacedPodTemplate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/replicationcontrollers
     */
    public function listCoreV1NamespacedReplicationController(
        ListCoreV1NamespacedReplicationControllerRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedReplicationControllerResponse
    {
        // TODO: Implement ListCoreV1NamespacedReplicationController
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/resourcequotas
     */
    public function listCoreV1NamespacedResourceQuota(
        ListCoreV1NamespacedResourceQuotaRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedResourceQuotaResponse
    {
        // TODO: Implement ListCoreV1NamespacedResourceQuota
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/secrets
     */
    public function listCoreV1NamespacedSecret(
        ListCoreV1NamespacedSecretRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedSecretResponse
    {
        // TODO: Implement ListCoreV1NamespacedSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/services
     */
    public function listCoreV1NamespacedService(
        ListCoreV1NamespacedServiceRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedServiceResponse
    {
        // TODO: Implement ListCoreV1NamespacedService
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/serviceaccounts
     */
    public function listCoreV1NamespacedServiceAccount(
        ListCoreV1NamespacedServiceAccountRequest $request,
        string $namespace,
    ): ListCoreV1NamespacedServiceAccountResponse
    {
        // TODO: Implement ListCoreV1NamespacedServiceAccount
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{name}
     */
    public function patchCoreV1Namespace(
        PatchCoreV1NamespaceRequest $request,
        string $name,
    ): PatchCoreV1NamespaceResponse
    {
        // TODO: Implement PatchCoreV1Namespace
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{name}/status
     */
    public function patchCoreV1NamespaceStatus(
        PatchCoreV1NamespaceStatusRequest $request,
        string $name,
    ): PatchCoreV1NamespaceStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespaceStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/configmaps/{name}
     */
    public function patchCoreV1NamespacedConfigMap(
        PatchCoreV1NamespacedConfigMapRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedConfigMapResponse
    {
        // TODO: Implement PatchCoreV1NamespacedConfigMap
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/endpoints/{name}
     */
    public function patchCoreV1NamespacedEndpoints(
        PatchCoreV1NamespacedEndpointsRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedEndpointsResponse
    {
        // TODO: Implement PatchCoreV1NamespacedEndpoints
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/events/{name}
     */
    public function patchCoreV1NamespacedEvent(
        PatchCoreV1NamespacedEventRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedEventResponse
    {
        // TODO: Implement PatchCoreV1NamespacedEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/limitranges/{name}
     */
    public function patchCoreV1NamespacedLimitRange(
        PatchCoreV1NamespacedLimitRangeRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedLimitRangeResponse
    {
        // TODO: Implement PatchCoreV1NamespacedLimitRange
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}
     */
    public function patchCoreV1NamespacedPersistentVolumeClaim(
        PatchCoreV1NamespacedPersistentVolumeClaimRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPersistentVolumeClaimResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPersistentVolumeClaim
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status
     */
    public function patchCoreV1NamespacedPersistentVolumeClaimStatus(
        PatchCoreV1NamespacedPersistentVolumeClaimStatusRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPersistentVolumeClaimStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPersistentVolumeClaimStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/pods/{name}
     */
    public function patchCoreV1NamespacedPod(
        PatchCoreV1NamespacedPodRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPodResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPod
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/pods/{name}/ephemeralcontainers
     */
    public function patchCoreV1NamespacedPodEphemeralcontainers(
        PatchCoreV1NamespacedPodEphemeralcontainersRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPodEphemeralcontainersResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPodEphemeralcontainers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/pods/{name}/status
     */
    public function patchCoreV1NamespacedPodStatus(
        PatchCoreV1NamespacedPodStatusRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPodStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPodStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/podtemplates/{name}
     */
    public function patchCoreV1NamespacedPodTemplate(
        PatchCoreV1NamespacedPodTemplateRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedPodTemplateResponse
    {
        // TODO: Implement PatchCoreV1NamespacedPodTemplate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/replicationcontrollers/{name}
     */
    public function patchCoreV1NamespacedReplicationController(
        PatchCoreV1NamespacedReplicationControllerRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedReplicationControllerResponse
    {
        // TODO: Implement PatchCoreV1NamespacedReplicationController
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/replicationcontrollers/{name}/scale
     */
    public function patchCoreV1NamespacedReplicationControllerScale(
        PatchCoreV1NamespacedReplicationControllerScaleRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedReplicationControllerScaleResponse
    {
        // TODO: Implement PatchCoreV1NamespacedReplicationControllerScale
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/replicationcontrollers/{name}/status
     */
    public function patchCoreV1NamespacedReplicationControllerStatus(
        PatchCoreV1NamespacedReplicationControllerStatusRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedReplicationControllerStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespacedReplicationControllerStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/resourcequotas/{name}
     */
    public function patchCoreV1NamespacedResourceQuota(
        PatchCoreV1NamespacedResourceQuotaRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedResourceQuotaResponse
    {
        // TODO: Implement PatchCoreV1NamespacedResourceQuota
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/resourcequotas/{name}/status
     */
    public function patchCoreV1NamespacedResourceQuotaStatus(
        PatchCoreV1NamespacedResourceQuotaStatusRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedResourceQuotaStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespacedResourceQuotaStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/secrets/{name}
     */
    public function patchCoreV1NamespacedSecret(
        PatchCoreV1NamespacedSecretRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedSecretResponse
    {
        // TODO: Implement PatchCoreV1NamespacedSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/services/{name}
     */
    public function patchCoreV1NamespacedService(
        PatchCoreV1NamespacedServiceRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedServiceResponse
    {
        // TODO: Implement PatchCoreV1NamespacedService
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/serviceaccounts/{name}
     */
    public function patchCoreV1NamespacedServiceAccount(
        PatchCoreV1NamespacedServiceAccountRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedServiceAccountResponse
    {
        // TODO: Implement PatchCoreV1NamespacedServiceAccount
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /api/v1/namespaces/{namespace}/services/{name}/status
     */
    public function patchCoreV1NamespacedServiceStatus(
        PatchCoreV1NamespacedServiceStatusRequest $request,
        string $name,
        string $namespace,
    ): PatchCoreV1NamespacedServiceStatusResponse
    {
        // TODO: Implement PatchCoreV1NamespacedServiceStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{name}
     */
    public function readCoreV1Namespace(
        ReadCoreV1NamespaceRequest $request,
        string $name,
    ): ReadCoreV1NamespaceResponse
    {
        // TODO: Implement ReadCoreV1Namespace
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{name}/status
     */
    public function readCoreV1NamespaceStatus(
        ReadCoreV1NamespaceStatusRequest $request,
        string $name,
    ): ReadCoreV1NamespaceStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespaceStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/configmaps/{name}
     */
    public function readCoreV1NamespacedConfigMap(
        ReadCoreV1NamespacedConfigMapRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedConfigMapResponse
    {
        // TODO: Implement ReadCoreV1NamespacedConfigMap
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/endpoints/{name}
     */
    public function readCoreV1NamespacedEndpoints(
        ReadCoreV1NamespacedEndpointsRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedEndpointsResponse
    {
        // TODO: Implement ReadCoreV1NamespacedEndpoints
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/events/{name}
     */
    public function readCoreV1NamespacedEvent(
        ReadCoreV1NamespacedEventRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedEventResponse
    {
        // TODO: Implement ReadCoreV1NamespacedEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/limitranges/{name}
     */
    public function readCoreV1NamespacedLimitRange(
        ReadCoreV1NamespacedLimitRangeRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedLimitRangeResponse
    {
        // TODO: Implement ReadCoreV1NamespacedLimitRange
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}
     */
    public function readCoreV1NamespacedPersistentVolumeClaim(
        ReadCoreV1NamespacedPersistentVolumeClaimRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPersistentVolumeClaimResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPersistentVolumeClaim
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/persistentvolumeclaims/{name}/status
     */
    public function readCoreV1NamespacedPersistentVolumeClaimStatus(
        ReadCoreV1NamespacedPersistentVolumeClaimStatusRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPersistentVolumeClaimStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPersistentVolumeClaimStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}
     */
    public function readCoreV1NamespacedPod(
        ReadCoreV1NamespacedPodRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPodResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPod
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/ephemeralcontainers
     */
    public function readCoreV1NamespacedPodEphemeralcontainers(
        ReadCoreV1NamespacedPodEphemeralcontainersRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPodEphemeralcontainersResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPodEphemeralcontainers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/log
     */
    public function readCoreV1NamespacedPodLog(
        ReadCoreV1NamespacedPodLogRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPodLogResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPodLog
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/pods/{name}/status
     */
    public function readCoreV1NamespacedPodStatus(
        ReadCoreV1NamespacedPodStatusRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPodStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPodStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/podtemplates/{name}
     */
    public function readCoreV1NamespacedPodTemplate(
        ReadCoreV1NamespacedPodTemplateRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedPodTemplateResponse
    {
        // TODO: Implement ReadCoreV1NamespacedPodTemplate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/replicationcontrollers/{name}
     */
    public function readCoreV1NamespacedReplicationController(
        ReadCoreV1NamespacedReplicationControllerRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedReplicationControllerResponse
    {
        // TODO: Implement ReadCoreV1NamespacedReplicationController
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/replicationcontrollers/{name}/scale
     */
    public function readCoreV1NamespacedReplicationControllerScale(
        ReadCoreV1NamespacedReplicationControllerScaleRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedReplicationControllerScaleResponse
    {
        // TODO: Implement ReadCoreV1NamespacedReplicationControllerScale
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/replicationcontrollers/{name}/status
     */
    public function readCoreV1NamespacedReplicationControllerStatus(
        ReadCoreV1NamespacedReplicationControllerStatusRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedReplicationControllerStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespacedReplicationControllerStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/resourcequotas/{name}
     */
    public function readCoreV1NamespacedResourceQuota(
        ReadCoreV1NamespacedResourceQuotaRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedResourceQuotaResponse
    {
        // TODO: Implement ReadCoreV1NamespacedResourceQuota
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/resourcequotas/{name}/status
     */
    public function readCoreV1NamespacedResourceQuotaStatus(
        ReadCoreV1NamespacedResourceQuotaStatusRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedResourceQuotaStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespacedResourceQuotaStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/secrets/{name}
     */
    public function readCoreV1NamespacedSecret(
        ReadCoreV1NamespacedSecretRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedSecretResponse
    {
        // TODO: Implement ReadCoreV1NamespacedSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/services/{name}
     */
    public function readCoreV1NamespacedService(
        ReadCoreV1NamespacedServiceRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedServiceResponse
    {
        // TODO: Implement ReadCoreV1NamespacedService
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/serviceaccounts/{name}
     */
    public function readCoreV1NamespacedServiceAccount(
        ReadCoreV1NamespacedServiceAccountRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedServiceAccountResponse
    {
        // TODO: Implement ReadCoreV1NamespacedServiceAccount
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/namespaces/{namespace}/services/{name}/status
     */
    public function readCoreV1NamespacedServiceStatus(
        ReadCoreV1NamespacedServiceStatusRequest $request,
        string $name,
        string $namespace,
    ): ReadCoreV1NamespacedServiceStatusResponse
    {
        // TODO: Implement ReadCoreV1NamespacedServiceStatus
        throw new \BadMethodCallException('Not implemented');
    }
}
