<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\WatchController as BaseWatchController;
use App\Http\Requests\WatchCoreV1ConfigMapListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1EndpointsListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1EventListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1LimitRangeListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1NamespaceRequest;
use App\Http\Requests\WatchCoreV1NamespaceListRequest;
use App\Http\Requests\WatchCoreV1NamespacedConfigMapRequest;
use App\Http\Requests\WatchCoreV1NamespacedConfigMapListRequest;
use App\Http\Requests\WatchCoreV1NamespacedEndpointsRequest;
use App\Http\Requests\WatchCoreV1NamespacedEndpointsListRequest;
use App\Http\Requests\WatchCoreV1NamespacedEventRequest;
use App\Http\Requests\WatchCoreV1NamespacedEventListRequest;
use App\Http\Requests\WatchCoreV1NamespacedLimitRangeRequest;
use App\Http\Requests\WatchCoreV1NamespacedLimitRangeListRequest;
use App\Http\Requests\WatchCoreV1NamespacedPersistentVolumeClaimRequest;
use App\Http\Requests\WatchCoreV1NamespacedPersistentVolumeClaimListRequest;
use App\Http\Requests\WatchCoreV1NamespacedPodRequest;
use App\Http\Requests\WatchCoreV1NamespacedPodListRequest;
use App\Http\Requests\WatchCoreV1NamespacedPodTemplateRequest;
use App\Http\Requests\WatchCoreV1NamespacedPodTemplateListRequest;
use App\Http\Requests\WatchCoreV1NamespacedReplicationControllerRequest;
use App\Http\Requests\WatchCoreV1NamespacedReplicationControllerListRequest;
use App\Http\Requests\WatchCoreV1NamespacedResourceQuotaRequest;
use App\Http\Requests\WatchCoreV1NamespacedResourceQuotaListRequest;
use App\Http\Requests\WatchCoreV1NamespacedSecretRequest;
use App\Http\Requests\WatchCoreV1NamespacedSecretListRequest;
use App\Http\Requests\WatchCoreV1NamespacedServiceRequest;
use App\Http\Requests\WatchCoreV1NamespacedServiceAccountRequest;
use App\Http\Requests\WatchCoreV1NamespacedServiceAccountListRequest;
use App\Http\Requests\WatchCoreV1NamespacedServiceListRequest;
use App\Http\Requests\WatchCoreV1NodeRequest;
use App\Http\Requests\WatchCoreV1NodeListRequest;
use App\Http\Requests\WatchCoreV1PersistentVolumeRequest;
use App\Http\Requests\WatchCoreV1PersistentVolumeClaimListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1PersistentVolumeListRequest;
use App\Http\Requests\WatchCoreV1PodListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1PodTemplateListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1ReplicationControllerListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1ResourceQuotaListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1SecretListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1ServiceAccountListForAllNamespacesRequest;
use App\Http\Requests\WatchCoreV1ServiceListForAllNamespacesRequest;
use App\Http\Responses\OpenApi\WatchCoreV1ConfigMapListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1EndpointsListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1EventListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1LimitRangeListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespaceListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespaceResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedConfigMapListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedConfigMapResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedEndpointsListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedEndpointsResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedEventListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedEventResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedLimitRangeListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedLimitRangeResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPersistentVolumeClaimListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPersistentVolumeClaimResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPodListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPodResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPodTemplateListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedPodTemplateResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedReplicationControllerListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedReplicationControllerResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedResourceQuotaListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedResourceQuotaResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedSecretListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedSecretResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedServiceAccountListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedServiceAccountResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedServiceListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NamespacedServiceResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NodeListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1NodeResponse;
use App\Http\Responses\OpenApi\WatchCoreV1PersistentVolumeClaimListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1PersistentVolumeListResponse;
use App\Http\Responses\OpenApi\WatchCoreV1PersistentVolumeResponse;
use App\Http\Responses\OpenApi\WatchCoreV1PodListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1PodTemplateListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1ReplicationControllerListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1ResourceQuotaListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1SecretListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1ServiceAccountListForAllNamespacesResponse;
use App\Http\Responses\OpenApi\WatchCoreV1ServiceListForAllNamespacesResponse;

final class WatchController extends BaseWatchController
{
    /**
     * GET /api/v1/watch/configmaps
     */
    public function watchCoreV1ConfigMapListForAllNamespaces(
        WatchCoreV1ConfigMapListForAllNamespacesRequest $request,
    ): WatchCoreV1ConfigMapListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1ConfigMapListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/endpoints
     */
    public function watchCoreV1EndpointsListForAllNamespaces(
        WatchCoreV1EndpointsListForAllNamespacesRequest $request,
    ): WatchCoreV1EndpointsListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1EndpointsListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/events
     */
    public function watchCoreV1EventListForAllNamespaces(
        WatchCoreV1EventListForAllNamespacesRequest $request,
    ): WatchCoreV1EventListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1EventListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/limitranges
     */
    public function watchCoreV1LimitRangeListForAllNamespaces(
        WatchCoreV1LimitRangeListForAllNamespacesRequest $request,
    ): WatchCoreV1LimitRangeListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1LimitRangeListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{name}
     */
    public function watchCoreV1Namespace(
        WatchCoreV1NamespaceRequest $request,
        string $name,
    ): WatchCoreV1NamespaceResponse
    {
        // TODO: Implement WatchCoreV1Namespace
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces
     */
    public function watchCoreV1NamespaceList(
        WatchCoreV1NamespaceListRequest $request,
    ): WatchCoreV1NamespaceListResponse
    {
        // TODO: Implement WatchCoreV1NamespaceList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/configmaps/{name}
     */
    public function watchCoreV1NamespacedConfigMap(
        WatchCoreV1NamespacedConfigMapRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedConfigMapResponse
    {
        // TODO: Implement WatchCoreV1NamespacedConfigMap
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/configmaps
     */
    public function watchCoreV1NamespacedConfigMapList(
        WatchCoreV1NamespacedConfigMapListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedConfigMapListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedConfigMapList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/endpoints/{name}
     */
    public function watchCoreV1NamespacedEndpoints(
        WatchCoreV1NamespacedEndpointsRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedEndpointsResponse
    {
        // TODO: Implement WatchCoreV1NamespacedEndpoints
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/endpoints
     */
    public function watchCoreV1NamespacedEndpointsList(
        WatchCoreV1NamespacedEndpointsListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedEndpointsListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedEndpointsList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/events/{name}
     */
    public function watchCoreV1NamespacedEvent(
        WatchCoreV1NamespacedEventRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedEventResponse
    {
        // TODO: Implement WatchCoreV1NamespacedEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/events
     */
    public function watchCoreV1NamespacedEventList(
        WatchCoreV1NamespacedEventListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedEventListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedEventList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/limitranges/{name}
     */
    public function watchCoreV1NamespacedLimitRange(
        WatchCoreV1NamespacedLimitRangeRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedLimitRangeResponse
    {
        // TODO: Implement WatchCoreV1NamespacedLimitRange
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/limitranges
     */
    public function watchCoreV1NamespacedLimitRangeList(
        WatchCoreV1NamespacedLimitRangeListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedLimitRangeListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedLimitRangeList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/persistentvolumeclaims/{name}
     */
    public function watchCoreV1NamespacedPersistentVolumeClaim(
        WatchCoreV1NamespacedPersistentVolumeClaimRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedPersistentVolumeClaimResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPersistentVolumeClaim
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/persistentvolumeclaims
     */
    public function watchCoreV1NamespacedPersistentVolumeClaimList(
        WatchCoreV1NamespacedPersistentVolumeClaimListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedPersistentVolumeClaimListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPersistentVolumeClaimList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/pods/{name}
     */
    public function watchCoreV1NamespacedPod(
        WatchCoreV1NamespacedPodRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedPodResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPod
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/pods
     */
    public function watchCoreV1NamespacedPodList(
        WatchCoreV1NamespacedPodListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedPodListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPodList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/podtemplates/{name}
     */
    public function watchCoreV1NamespacedPodTemplate(
        WatchCoreV1NamespacedPodTemplateRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedPodTemplateResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPodTemplate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/podtemplates
     */
    public function watchCoreV1NamespacedPodTemplateList(
        WatchCoreV1NamespacedPodTemplateListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedPodTemplateListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedPodTemplateList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/replicationcontrollers/{name}
     */
    public function watchCoreV1NamespacedReplicationController(
        WatchCoreV1NamespacedReplicationControllerRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedReplicationControllerResponse
    {
        // TODO: Implement WatchCoreV1NamespacedReplicationController
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/replicationcontrollers
     */
    public function watchCoreV1NamespacedReplicationControllerList(
        WatchCoreV1NamespacedReplicationControllerListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedReplicationControllerListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedReplicationControllerList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/resourcequotas/{name}
     */
    public function watchCoreV1NamespacedResourceQuota(
        WatchCoreV1NamespacedResourceQuotaRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedResourceQuotaResponse
    {
        // TODO: Implement WatchCoreV1NamespacedResourceQuota
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/resourcequotas
     */
    public function watchCoreV1NamespacedResourceQuotaList(
        WatchCoreV1NamespacedResourceQuotaListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedResourceQuotaListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedResourceQuotaList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/secrets/{name}
     */
    public function watchCoreV1NamespacedSecret(
        WatchCoreV1NamespacedSecretRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedSecretResponse
    {
        // TODO: Implement WatchCoreV1NamespacedSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/secrets
     */
    public function watchCoreV1NamespacedSecretList(
        WatchCoreV1NamespacedSecretListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedSecretListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedSecretList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/services/{name}
     */
    public function watchCoreV1NamespacedService(
        WatchCoreV1NamespacedServiceRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedServiceResponse
    {
        // TODO: Implement WatchCoreV1NamespacedService
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/serviceaccounts/{name}
     */
    public function watchCoreV1NamespacedServiceAccount(
        WatchCoreV1NamespacedServiceAccountRequest $request,
        string $name,
        string $namespace,
    ): WatchCoreV1NamespacedServiceAccountResponse
    {
        // TODO: Implement WatchCoreV1NamespacedServiceAccount
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/serviceaccounts
     */
    public function watchCoreV1NamespacedServiceAccountList(
        WatchCoreV1NamespacedServiceAccountListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedServiceAccountListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedServiceAccountList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/namespaces/{namespace}/services
     */
    public function watchCoreV1NamespacedServiceList(
        WatchCoreV1NamespacedServiceListRequest $request,
        string $namespace,
    ): WatchCoreV1NamespacedServiceListResponse
    {
        // TODO: Implement WatchCoreV1NamespacedServiceList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/nodes/{name}
     */
    public function watchCoreV1Node(
        WatchCoreV1NodeRequest $request,
        string $name,
    ): WatchCoreV1NodeResponse
    {
        // TODO: Implement WatchCoreV1Node
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/nodes
     */
    public function watchCoreV1NodeList(
        WatchCoreV1NodeListRequest $request,
    ): WatchCoreV1NodeListResponse
    {
        // TODO: Implement WatchCoreV1NodeList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/persistentvolumes/{name}
     */
    public function watchCoreV1PersistentVolume(
        WatchCoreV1PersistentVolumeRequest $request,
        string $name,
    ): WatchCoreV1PersistentVolumeResponse
    {
        // TODO: Implement WatchCoreV1PersistentVolume
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/persistentvolumeclaims
     */
    public function watchCoreV1PersistentVolumeClaimListForAllNamespaces(
        WatchCoreV1PersistentVolumeClaimListForAllNamespacesRequest $request,
    ): WatchCoreV1PersistentVolumeClaimListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1PersistentVolumeClaimListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/persistentvolumes
     */
    public function watchCoreV1PersistentVolumeList(
        WatchCoreV1PersistentVolumeListRequest $request,
    ): WatchCoreV1PersistentVolumeListResponse
    {
        // TODO: Implement WatchCoreV1PersistentVolumeList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/pods
     */
    public function watchCoreV1PodListForAllNamespaces(
        WatchCoreV1PodListForAllNamespacesRequest $request,
    ): WatchCoreV1PodListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1PodListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/podtemplates
     */
    public function watchCoreV1PodTemplateListForAllNamespaces(
        WatchCoreV1PodTemplateListForAllNamespacesRequest $request,
    ): WatchCoreV1PodTemplateListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1PodTemplateListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/replicationcontrollers
     */
    public function watchCoreV1ReplicationControllerListForAllNamespaces(
        WatchCoreV1ReplicationControllerListForAllNamespacesRequest $request,
    ): WatchCoreV1ReplicationControllerListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1ReplicationControllerListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/resourcequotas
     */
    public function watchCoreV1ResourceQuotaListForAllNamespaces(
        WatchCoreV1ResourceQuotaListForAllNamespacesRequest $request,
    ): WatchCoreV1ResourceQuotaListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1ResourceQuotaListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/secrets
     */
    public function watchCoreV1SecretListForAllNamespaces(
        WatchCoreV1SecretListForAllNamespacesRequest $request,
    ): WatchCoreV1SecretListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1SecretListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/serviceaccounts
     */
    public function watchCoreV1ServiceAccountListForAllNamespaces(
        WatchCoreV1ServiceAccountListForAllNamespacesRequest $request,
    ): WatchCoreV1ServiceAccountListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1ServiceAccountListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /api/v1/watch/services
     */
    public function watchCoreV1ServiceListForAllNamespaces(
        WatchCoreV1ServiceListForAllNamespacesRequest $request,
    ): WatchCoreV1ServiceListForAllNamespacesResponse
    {
        // TODO: Implement WatchCoreV1ServiceListForAllNamespaces
        throw new \BadMethodCallException('Not implemented');
    }
}
