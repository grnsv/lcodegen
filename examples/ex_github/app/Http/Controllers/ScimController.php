<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\ScimController as BaseScimController;
use App\Http\Requests\EnterpriseAdminGetProvisioningInformationForEnterpriseGroupRequest;
use App\Http\Requests\EnterpriseAdminListProvisionedGroupsEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminListProvisionedIdentitiesEnterpriseRequest;
use App\Http\Requests\EnterpriseAdminProvisionAndInviteEnterpriseGroupRequest;
use App\Http\Requests\EnterpriseAdminProvisionAndInviteEnterpriseUserRequest;
use App\Http\Requests\EnterpriseAdminSetInformationForProvisionedEnterpriseGroupRequest;
use App\Http\Requests\EnterpriseAdminSetInformationForProvisionedEnterpriseUserRequest;
use App\Http\Requests\EnterpriseAdminUpdateAttributeForEnterpriseGroupRequest;
use App\Http\Requests\EnterpriseAdminUpdateAttributeForEnterpriseUserRequest;
use App\Http\Requests\ScimListProvisionedIdentitiesRequest;
use App\Http\Requests\ScimProvisionAndInviteUserRequest;
use App\Http\Requests\ScimSetInformationForProvisionedUserRequest;
use App\Http\Requests\ScimUpdateAttributeForUserRequest;
use App\Http\Responses\OpenApi\EnterpriseAdminDeleteScimGroupFromEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminDeleteUserFromEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetProvisioningInformationForEnterpriseGroupResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminGetProvisioningInformationForEnterpriseUserResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListProvisionedGroupsEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminListProvisionedIdentitiesEnterpriseResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminProvisionAndInviteEnterpriseGroupResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminProvisionAndInviteEnterpriseUserResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetInformationForProvisionedEnterpriseGroupResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminSetInformationForProvisionedEnterpriseUserResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminUpdateAttributeForEnterpriseGroupResponse;
use App\Http\Responses\OpenApi\EnterpriseAdminUpdateAttributeForEnterpriseUserResponse;
use App\Http\Responses\OpenApi\ScimDeleteUserFromOrgResponse;
use App\Http\Responses\OpenApi\ScimGetProvisioningInformationForUserResponse;
use App\Http\Responses\OpenApi\ScimListProvisionedIdentitiesResponse;
use App\Http\Responses\OpenApi\ScimProvisionAndInviteUserResponse;
use App\Http\Responses\OpenApi\ScimSetInformationForProvisionedUserResponse;
use App\Http\Responses\OpenApi\ScimUpdateAttributeForUserResponse;

final class ScimController extends BaseScimController
{
    /**
     * DELETE /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}
     *
     * Delete a SCIM group from an enterprise
     */
    public function enterpriseAdminDeleteScimGroupFromEnterprise(
        string $enterprise,
        string $scim_group_id,
    ): EnterpriseAdminDeleteScimGroupFromEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminDeleteScimGroupFromEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}
     *
     * Delete a SCIM user from an enterprise
     */
    public function enterpriseAdminDeleteUserFromEnterprise(
        string $enterprise,
        string $scim_user_id,
    ): EnterpriseAdminDeleteUserFromEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminDeleteUserFromEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}
     *
     * Get SCIM provisioning information for an enterprise group
     */
    public function enterpriseAdminGetProvisioningInformationForEnterpriseGroup(
        EnterpriseAdminGetProvisioningInformationForEnterpriseGroupRequest $request,
        string $enterprise,
        string $scim_group_id,
    ): EnterpriseAdminGetProvisioningInformationForEnterpriseGroupResponse
    {
        // TODO: Implement EnterpriseAdminGetProvisioningInformationForEnterpriseGroup
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}
     *
     * Get SCIM provisioning information for an enterprise user
     */
    public function enterpriseAdminGetProvisioningInformationForEnterpriseUser(
        string $enterprise,
        string $scim_user_id,
    ): EnterpriseAdminGetProvisioningInformationForEnterpriseUserResponse
    {
        // TODO: Implement EnterpriseAdminGetProvisioningInformationForEnterpriseUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/enterprises/{enterprise}/Groups
     *
     * List provisioned SCIM groups for an enterprise
     */
    public function enterpriseAdminListProvisionedGroupsEnterprise(
        EnterpriseAdminListProvisionedGroupsEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminListProvisionedGroupsEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListProvisionedGroupsEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/enterprises/{enterprise}/Users
     *
     * List SCIM provisioned identities for an enterprise
     */
    public function enterpriseAdminListProvisionedIdentitiesEnterprise(
        EnterpriseAdminListProvisionedIdentitiesEnterpriseRequest $request,
        string $enterprise,
    ): EnterpriseAdminListProvisionedIdentitiesEnterpriseResponse
    {
        // TODO: Implement EnterpriseAdminListProvisionedIdentitiesEnterprise
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /scim/v2/enterprises/{enterprise}/Groups
     *
     * Provision a SCIM enterprise group and invite users
     */
    public function enterpriseAdminProvisionAndInviteEnterpriseGroup(
        EnterpriseAdminProvisionAndInviteEnterpriseGroupRequest $request,
        string $enterprise,
    ): EnterpriseAdminProvisionAndInviteEnterpriseGroupResponse
    {
        // TODO: Implement EnterpriseAdminProvisionAndInviteEnterpriseGroup
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /scim/v2/enterprises/{enterprise}/Users
     *
     * Provision and invite a SCIM enterprise user
     */
    public function enterpriseAdminProvisionAndInviteEnterpriseUser(
        EnterpriseAdminProvisionAndInviteEnterpriseUserRequest $request,
        string $enterprise,
    ): EnterpriseAdminProvisionAndInviteEnterpriseUserResponse
    {
        // TODO: Implement EnterpriseAdminProvisionAndInviteEnterpriseUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}
     *
     * Set SCIM information for a provisioned enterprise group
     */
    public function enterpriseAdminSetInformationForProvisionedEnterpriseGroup(
        EnterpriseAdminSetInformationForProvisionedEnterpriseGroupRequest $request,
        string $enterprise,
        string $scim_group_id,
    ): EnterpriseAdminSetInformationForProvisionedEnterpriseGroupResponse
    {
        // TODO: Implement EnterpriseAdminSetInformationForProvisionedEnterpriseGroup
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}
     *
     * Set SCIM information for a provisioned enterprise user
     */
    public function enterpriseAdminSetInformationForProvisionedEnterpriseUser(
        EnterpriseAdminSetInformationForProvisionedEnterpriseUserRequest $request,
        string $enterprise,
        string $scim_user_id,
    ): EnterpriseAdminSetInformationForProvisionedEnterpriseUserResponse
    {
        // TODO: Implement EnterpriseAdminSetInformationForProvisionedEnterpriseUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}
     *
     * Update an attribute for a SCIM enterprise group
     */
    public function enterpriseAdminUpdateAttributeForEnterpriseGroup(
        EnterpriseAdminUpdateAttributeForEnterpriseGroupRequest $request,
        string $enterprise,
        string $scim_group_id,
    ): EnterpriseAdminUpdateAttributeForEnterpriseGroupResponse
    {
        // TODO: Implement EnterpriseAdminUpdateAttributeForEnterpriseGroup
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}
     *
     * Update an attribute for a SCIM enterprise user
     */
    public function enterpriseAdminUpdateAttributeForEnterpriseUser(
        EnterpriseAdminUpdateAttributeForEnterpriseUserRequest $request,
        string $enterprise,
        string $scim_user_id,
    ): EnterpriseAdminUpdateAttributeForEnterpriseUserResponse
    {
        // TODO: Implement EnterpriseAdminUpdateAttributeForEnterpriseUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /scim/v2/organizations/{org}/Users/{scim_user_id}
     *
     * Delete a SCIM user from an organization
     */
    public function scimDeleteUserFromOrg(
        string $org,
        string $scim_user_id,
    ): ScimDeleteUserFromOrgResponse
    {
        // TODO: Implement ScimDeleteUserFromOrg
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/organizations/{org}/Users/{scim_user_id}
     *
     * Get SCIM provisioning information for a user
     */
    public function scimGetProvisioningInformationForUser(
        string $org,
        string $scim_user_id,
    ): ScimGetProvisioningInformationForUserResponse
    {
        // TODO: Implement ScimGetProvisioningInformationForUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /scim/v2/organizations/{org}/Users
     *
     * List SCIM provisioned identities
     */
    public function scimListProvisionedIdentities(
        ScimListProvisionedIdentitiesRequest $request,
        string $org,
    ): ScimListProvisionedIdentitiesResponse
    {
        // TODO: Implement ScimListProvisionedIdentities
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /scim/v2/organizations/{org}/Users
     *
     * Provision and invite a SCIM user
     */
    public function scimProvisionAndInviteUser(
        ScimProvisionAndInviteUserRequest $request,
        string $org,
    ): ScimProvisionAndInviteUserResponse
    {
        // TODO: Implement ScimProvisionAndInviteUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /scim/v2/organizations/{org}/Users/{scim_user_id}
     *
     * Update a provisioned organization membership
     */
    public function scimSetInformationForProvisionedUser(
        ScimSetInformationForProvisionedUserRequest $request,
        string $org,
        string $scim_user_id,
    ): ScimSetInformationForProvisionedUserResponse
    {
        // TODO: Implement ScimSetInformationForProvisionedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /scim/v2/organizations/{org}/Users/{scim_user_id}
     *
     * Update an attribute for a SCIM user
     */
    public function scimUpdateAttributeForUser(
        ScimUpdateAttributeForUserRequest $request,
        string $org,
        string $scim_user_id,
    ): ScimUpdateAttributeForUserResponse
    {
        // TODO: Implement ScimUpdateAttributeForUser
        throw new \BadMethodCallException('Not implemented');
    }
}
