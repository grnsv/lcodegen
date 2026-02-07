<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Controllers;

use App\Http\Controllers\OpenApi\RepoController as BaseRepoController;
use App\Http\Requests\ActionsCreateOrUpdateRepoSecretRequest;
use App\Http\Requests\ActionsCreateWorkflowDispatchRequest;
use App\Http\Requests\ActionsListArtifactsForRepoRequest;
use App\Http\Requests\ActionsListJobsForWorkflowRunRequest;
use App\Http\Requests\ActionsListRepoSecretsRequest;
use App\Http\Requests\ActionsListRepoWorkflowsRequest;
use App\Http\Requests\ActionsListSelfHostedRunnersForRepoRequest;
use App\Http\Requests\ActionsListWorkflowRunArtifactsRequest;
use App\Http\Requests\ActionsListWorkflowRunsRequest;
use App\Http\Requests\ActionsListWorkflowRunsForRepoRequest;
use App\Http\Requests\ActionsReviewPendingDeploymentsForRunRequest;
use App\Http\Requests\ActionsSetAllowedActionsRepositoryRequest;
use App\Http\Requests\ActionsSetGithubActionsPermissionsRepositoryRequest;
use App\Http\Requests\ActivityListRepoEventsRequest;
use App\Http\Requests\ActivityListRepoNotificationsForAuthenticatedUserRequest;
use App\Http\Requests\ActivityListWatchersForRepoRequest;
use App\Http\Requests\ActivityMarkRepoNotificationsAsReadRequest;
use App\Http\Requests\ActivitySetRepoSubscriptionRequest;
use App\Http\Requests\AppsCreateContentAttachmentRequest;
use App\Http\Requests\ChecksCreateRequest;
use App\Http\Requests\ChecksCreateSuiteRequest;
use App\Http\Requests\ChecksListAnnotationsRequest;
use App\Http\Requests\ChecksListForRefRequest;
use App\Http\Requests\ChecksListForSuiteRequest;
use App\Http\Requests\ChecksListSuitesForRefRequest;
use App\Http\Requests\ChecksSetSuitesPreferencesRequest;
use App\Http\Requests\CodeScanningDeleteAnalysisRequest;
use App\Http\Requests\CodeScanningListAlertInstancesRequest;
use App\Http\Requests\CodeScanningListAlertsForRepoRequest;
use App\Http\Requests\CodeScanningListRecentAnalysesRequest;
use App\Http\Requests\CodeScanningUpdateAlertRequest;
use App\Http\Requests\CodeScanningUploadSarifRequest;
use App\Http\Requests\GitCreateBlobRequest;
use App\Http\Requests\GitCreateCommitRequest;
use App\Http\Requests\GitCreateRefRequest;
use App\Http\Requests\GitCreateTagRequest;
use App\Http\Requests\GitCreateTreeRequest;
use App\Http\Requests\GitGetTreeRequest;
use App\Http\Requests\GitListMatchingRefsRequest;
use App\Http\Requests\GitUpdateRefRequest;
use App\Http\Requests\InteractionsSetRestrictionsForRepoRequest;
use App\Http\Requests\IssuesAddAssigneesRequest;
use App\Http\Requests\IssuesCreateRequest;
use App\Http\Requests\IssuesCreateCommentRequest;
use App\Http\Requests\IssuesCreateLabelRequest;
use App\Http\Requests\IssuesCreateMilestoneRequest;
use App\Http\Requests\IssuesListAssigneesRequest;
use App\Http\Requests\IssuesListCommentsRequest;
use App\Http\Requests\IssuesListCommentsForRepoRequest;
use App\Http\Requests\IssuesListEventsForRepoRequest;
use App\Http\Requests\IssuesListForRepoRequest;
use App\Http\Requests\IssuesListLabelsForMilestoneRequest;
use App\Http\Requests\IssuesListLabelsForRepoRequest;
use App\Http\Requests\IssuesListLabelsOnIssueRequest;
use App\Http\Requests\IssuesListMilestonesRequest;
use App\Http\Requests\IssuesLockRequest;
use App\Http\Requests\IssuesRemoveAssigneesRequest;
use App\Http\Requests\IssuesUpdateRequest;
use App\Http\Requests\IssuesUpdateCommentRequest;
use App\Http\Requests\IssuesUpdateLabelRequest;
use App\Http\Requests\IssuesUpdateMilestoneRequest;
use App\Http\Requests\MigrationsGetCommitAuthorsRequest;
use App\Http\Requests\MigrationsMapCommitAuthorRequest;
use App\Http\Requests\MigrationsSetLfsPreferenceRequest;
use App\Http\Requests\MigrationsStartImportRequest;
use App\Http\Requests\MigrationsUpdateImportRequest;
use App\Http\Requests\ProjectsCreateForRepoRequest;
use App\Http\Requests\ProjectsListForRepoRequest;
use App\Http\Requests\PullsCreateRequest;
use App\Http\Requests\PullsCreateReplyForReviewCommentRequest;
use App\Http\Requests\PullsCreateReviewRequest;
use App\Http\Requests\PullsCreateReviewCommentRequest;
use App\Http\Requests\PullsDismissReviewRequest;
use App\Http\Requests\PullsListRequest;
use App\Http\Requests\PullsListCommentsForReviewRequest;
use App\Http\Requests\PullsListCommitsRequest;
use App\Http\Requests\PullsListFilesRequest;
use App\Http\Requests\PullsListRequestedReviewersRequest;
use App\Http\Requests\PullsListReviewCommentsRequest;
use App\Http\Requests\PullsListReviewCommentsForRepoRequest;
use App\Http\Requests\PullsListReviewsRequest;
use App\Http\Requests\PullsMergeRequest;
use App\Http\Requests\PullsRemoveRequestedReviewersRequest;
use App\Http\Requests\PullsSubmitReviewRequest;
use App\Http\Requests\PullsUpdateRequest;
use App\Http\Requests\PullsUpdateBranchRequest;
use App\Http\Requests\PullsUpdateReviewRequest;
use App\Http\Requests\PullsUpdateReviewCommentRequest;
use App\Http\Requests\ReactionsCreateForCommitCommentRequest;
use App\Http\Requests\ReactionsCreateForIssueRequest;
use App\Http\Requests\ReactionsCreateForIssueCommentRequest;
use App\Http\Requests\ReactionsCreateForPullRequestReviewCommentRequest;
use App\Http\Requests\ReactionsCreateForReleaseRequest;
use App\Http\Requests\ReactionsListForCommitCommentRequest;
use App\Http\Requests\ReactionsListForIssueRequest;
use App\Http\Requests\ReactionsListForIssueCommentRequest;
use App\Http\Requests\ReactionsListForPullRequestReviewCommentRequest;
use App\Http\Requests\ReposAddAppAccessRestrictionsRequest;
use App\Http\Requests\ReposAddCollaboratorRequest;
use App\Http\Requests\ReposAddStatusCheckContextsRequest;
use App\Http\Requests\ReposAddTeamAccessRestrictionsRequest;
use App\Http\Requests\ReposAddUserAccessRestrictionsRequest;
use App\Http\Requests\ReposCompareCommitsRequest;
use App\Http\Requests\ReposCreateAutolinkRequest;
use App\Http\Requests\ReposCreateCommitCommentRequest;
use App\Http\Requests\ReposCreateCommitStatusRequest;
use App\Http\Requests\ReposCreateDeployKeyRequest;
use App\Http\Requests\ReposCreateDeploymentRequest;
use App\Http\Requests\ReposCreateDeploymentStatusRequest;
use App\Http\Requests\ReposCreateDispatchEventRequest;
use App\Http\Requests\ReposCreateForkRequest;
use App\Http\Requests\ReposCreateOrUpdateFileContentsRequest;
use App\Http\Requests\ReposCreatePagesSiteRequest;
use App\Http\Requests\ReposCreateReleaseRequest;
use App\Http\Requests\ReposCreateUsingTemplateRequest;
use App\Http\Requests\ReposCreateWebhookRequest;
use App\Http\Requests\ReposDeleteFileRequest;
use App\Http\Requests\ReposGetAllTopicsRequest;
use App\Http\Requests\ReposGetClonesRequest;
use App\Http\Requests\ReposGetCombinedStatusForRefRequest;
use App\Http\Requests\ReposGetCommitRequest;
use App\Http\Requests\ReposGetReadmeRequest;
use App\Http\Requests\ReposGetReadmeInDirectoryRequest;
use App\Http\Requests\ReposGetViewsRequest;
use App\Http\Requests\ReposListAutolinksRequest;
use App\Http\Requests\ReposListBranchesRequest;
use App\Http\Requests\ReposListCollaboratorsRequest;
use App\Http\Requests\ReposListCommentsForCommitRequest;
use App\Http\Requests\ReposListCommitCommentsForRepoRequest;
use App\Http\Requests\ReposListCommitStatusesForRefRequest;
use App\Http\Requests\ReposListCommitsRequest;
use App\Http\Requests\ReposListContributorsRequest;
use App\Http\Requests\ReposListDeployKeysRequest;
use App\Http\Requests\ReposListDeploymentStatusesRequest;
use App\Http\Requests\ReposListDeploymentsRequest;
use App\Http\Requests\ReposListForksRequest;
use App\Http\Requests\ReposListInvitationsRequest;
use App\Http\Requests\ReposListPagesBuildsRequest;
use App\Http\Requests\ReposListPullRequestsAssociatedWithCommitRequest;
use App\Http\Requests\ReposListReleaseAssetsRequest;
use App\Http\Requests\ReposListReleasesRequest;
use App\Http\Requests\ReposListTagsRequest;
use App\Http\Requests\ReposListTeamsRequest;
use App\Http\Requests\ReposListWebhookDeliveriesRequest;
use App\Http\Requests\ReposListWebhooksRequest;
use App\Http\Requests\ReposMergeRequest;
use App\Http\Requests\ReposMergeUpstreamRequest;
use App\Http\Requests\ReposRemoveAppAccessRestrictionsRequest;
use App\Http\Requests\ReposRemoveStatusCheckContextsRequest;
use App\Http\Requests\ReposRemoveTeamAccessRestrictionsRequest;
use App\Http\Requests\ReposRemoveUserAccessRestrictionsRequest;
use App\Http\Requests\ReposRenameBranchRequest;
use App\Http\Requests\ReposReplaceAllTopicsRequest;
use App\Http\Requests\ReposSetAppAccessRestrictionsRequest;
use App\Http\Requests\ReposSetStatusCheckContextsRequest;
use App\Http\Requests\ReposSetTeamAccessRestrictionsRequest;
use App\Http\Requests\ReposSetUserAccessRestrictionsRequest;
use App\Http\Requests\ReposTransferRequest;
use App\Http\Requests\ReposUpdateRequest;
use App\Http\Requests\ReposUpdateBranchProtectionRequest;
use App\Http\Requests\ReposUpdateCommitCommentRequest;
use App\Http\Requests\ReposUpdateInvitationRequest;
use App\Http\Requests\ReposUpdatePullRequestReviewProtectionRequest;
use App\Http\Requests\ReposUpdateReleaseRequest;
use App\Http\Requests\ReposUpdateReleaseAssetRequest;
use App\Http\Requests\ReposUpdateStatusCheckProtectionRequest;
use App\Http\Requests\ReposUpdateWebhookRequest;
use App\Http\Requests\ReposUpdateWebhookConfigForRepoRequest;
use App\Http\Requests\ReposUploadReleaseAssetRequest;
use App\Http\Requests\SecretScanningListAlertsForRepoRequest;
use App\Http\Requests\SecretScanningUpdateAlertRequest;
use App\Http\Responses\OpenApi\ActionsApproveWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsCancelWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsCreateOrUpdateRepoSecretResponse;
use App\Http\Responses\OpenApi\ActionsCreateRegistrationTokenForRepoResponse;
use App\Http\Responses\OpenApi\ActionsCreateRemoveTokenForRepoResponse;
use App\Http\Responses\OpenApi\ActionsCreateWorkflowDispatchResponse;
use App\Http\Responses\OpenApi\ActionsDeleteArtifactResponse;
use App\Http\Responses\OpenApi\ActionsDeleteRepoSecretResponse;
use App\Http\Responses\OpenApi\ActionsDeleteSelfHostedRunnerFromRepoResponse;
use App\Http\Responses\OpenApi\ActionsDeleteWorkflowRunLogsResponse;
use App\Http\Responses\OpenApi\ActionsDeleteWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsDisableWorkflowResponse;
use App\Http\Responses\OpenApi\ActionsEnableWorkflowResponse;
use App\Http\Responses\OpenApi\ActionsGetAllowedActionsRepositoryResponse;
use App\Http\Responses\OpenApi\ActionsGetArtifactResponse;
use App\Http\Responses\OpenApi\ActionsGetGithubActionsPermissionsRepositoryResponse;
use App\Http\Responses\OpenApi\ActionsGetJobForWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsGetRepoPublicKeyResponse;
use App\Http\Responses\OpenApi\ActionsGetRepoSecretResponse;
use App\Http\Responses\OpenApi\ActionsGetReviewsForRunResponse;
use App\Http\Responses\OpenApi\ActionsGetSelfHostedRunnerForRepoResponse;
use App\Http\Responses\OpenApi\ActionsGetWorkflowResponse;
use App\Http\Responses\OpenApi\ActionsGetWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsGetWorkflowRunUsageResponse;
use App\Http\Responses\OpenApi\ActionsGetWorkflowUsageResponse;
use App\Http\Responses\OpenApi\ActionsListArtifactsForRepoResponse;
use App\Http\Responses\OpenApi\ActionsListJobsForWorkflowRunResponse;
use App\Http\Responses\OpenApi\ActionsListRepoSecretsResponse;
use App\Http\Responses\OpenApi\ActionsListRepoWorkflowsResponse;
use App\Http\Responses\OpenApi\ActionsListRunnerApplicationsForRepoResponse;
use App\Http\Responses\OpenApi\ActionsListSelfHostedRunnersForRepoResponse;
use App\Http\Responses\OpenApi\ActionsListWorkflowRunArtifactsResponse;
use App\Http\Responses\OpenApi\ActionsListWorkflowRunsForRepoResponse;
use App\Http\Responses\OpenApi\ActionsListWorkflowRunsResponse;
use App\Http\Responses\OpenApi\ActionsReRunWorkflowResponse;
use App\Http\Responses\OpenApi\ActionsRetryWorkflowResponse;
use App\Http\Responses\OpenApi\ActionsReviewPendingDeploymentsForRunResponse;
use App\Http\Responses\OpenApi\ActionsSetAllowedActionsRepositoryResponse;
use App\Http\Responses\OpenApi\ActionsSetGithubActionsPermissionsRepositoryResponse;
use App\Http\Responses\OpenApi\ActivityDeleteRepoSubscriptionResponse;
use App\Http\Responses\OpenApi\ActivityGetRepoSubscriptionResponse;
use App\Http\Responses\OpenApi\ActivityListRepoEventsResponse;
use App\Http\Responses\OpenApi\ActivityListRepoNotificationsForAuthenticatedUserResponse;
use App\Http\Responses\OpenApi\ActivityListWatchersForRepoResponse;
use App\Http\Responses\OpenApi\ActivityMarkRepoNotificationsAsReadResponse;
use App\Http\Responses\OpenApi\ActivitySetRepoSubscriptionResponse;
use App\Http\Responses\OpenApi\AppsCreateContentAttachmentResponse;
use App\Http\Responses\OpenApi\ChecksCreateResponse;
use App\Http\Responses\OpenApi\ChecksCreateSuiteResponse;
use App\Http\Responses\OpenApi\ChecksGetResponse;
use App\Http\Responses\OpenApi\ChecksGetSuiteResponse;
use App\Http\Responses\OpenApi\ChecksListAnnotationsResponse;
use App\Http\Responses\OpenApi\ChecksListForRefResponse;
use App\Http\Responses\OpenApi\ChecksListForSuiteResponse;
use App\Http\Responses\OpenApi\ChecksListSuitesForRefResponse;
use App\Http\Responses\OpenApi\ChecksRerequestSuiteResponse;
use App\Http\Responses\OpenApi\ChecksSetSuitesPreferencesResponse;
use App\Http\Responses\OpenApi\CodeScanningDeleteAnalysisResponse;
use App\Http\Responses\OpenApi\CodeScanningGetAlertResponse;
use App\Http\Responses\OpenApi\CodeScanningGetAnalysisResponse;
use App\Http\Responses\OpenApi\CodeScanningGetSarifResponse;
use App\Http\Responses\OpenApi\CodeScanningListAlertInstancesResponse;
use App\Http\Responses\OpenApi\CodeScanningListAlertsForRepoResponse;
use App\Http\Responses\OpenApi\CodeScanningListRecentAnalysesResponse;
use App\Http\Responses\OpenApi\CodeScanningUpdateAlertResponse;
use App\Http\Responses\OpenApi\CodeScanningUploadSarifResponse;
use App\Http\Responses\OpenApi\GitCreateBlobResponse;
use App\Http\Responses\OpenApi\GitCreateCommitResponse;
use App\Http\Responses\OpenApi\GitCreateRefResponse;
use App\Http\Responses\OpenApi\GitCreateTagResponse;
use App\Http\Responses\OpenApi\GitCreateTreeResponse;
use App\Http\Responses\OpenApi\GitDeleteRefResponse;
use App\Http\Responses\OpenApi\GitGetBlobResponse;
use App\Http\Responses\OpenApi\GitGetCommitResponse;
use App\Http\Responses\OpenApi\GitGetRefResponse;
use App\Http\Responses\OpenApi\GitGetTagResponse;
use App\Http\Responses\OpenApi\GitGetTreeResponse;
use App\Http\Responses\OpenApi\GitListMatchingRefsResponse;
use App\Http\Responses\OpenApi\GitUpdateRefResponse;
use App\Http\Responses\OpenApi\InteractionsRemoveRestrictionsForRepoResponse;
use App\Http\Responses\OpenApi\InteractionsSetRestrictionsForRepoResponse;
use App\Http\Responses\OpenApi\IssuesAddAssigneesResponse;
use App\Http\Responses\OpenApi\IssuesCheckUserCanBeAssignedResponse;
use App\Http\Responses\OpenApi\IssuesCreateCommentResponse;
use App\Http\Responses\OpenApi\IssuesCreateLabelResponse;
use App\Http\Responses\OpenApi\IssuesCreateMilestoneResponse;
use App\Http\Responses\OpenApi\IssuesCreateResponse;
use App\Http\Responses\OpenApi\IssuesDeleteCommentResponse;
use App\Http\Responses\OpenApi\IssuesDeleteLabelResponse;
use App\Http\Responses\OpenApi\IssuesDeleteMilestoneResponse;
use App\Http\Responses\OpenApi\IssuesGetCommentResponse;
use App\Http\Responses\OpenApi\IssuesGetEventResponse;
use App\Http\Responses\OpenApi\IssuesGetLabelResponse;
use App\Http\Responses\OpenApi\IssuesGetMilestoneResponse;
use App\Http\Responses\OpenApi\IssuesGetResponse;
use App\Http\Responses\OpenApi\IssuesListAssigneesResponse;
use App\Http\Responses\OpenApi\IssuesListCommentsForRepoResponse;
use App\Http\Responses\OpenApi\IssuesListCommentsResponse;
use App\Http\Responses\OpenApi\IssuesListEventsForRepoResponse;
use App\Http\Responses\OpenApi\IssuesListForRepoResponse;
use App\Http\Responses\OpenApi\IssuesListLabelsForMilestoneResponse;
use App\Http\Responses\OpenApi\IssuesListLabelsForRepoResponse;
use App\Http\Responses\OpenApi\IssuesListLabelsOnIssueResponse;
use App\Http\Responses\OpenApi\IssuesListMilestonesResponse;
use App\Http\Responses\OpenApi\IssuesLockResponse;
use App\Http\Responses\OpenApi\IssuesRemoveAllLabelsResponse;
use App\Http\Responses\OpenApi\IssuesRemoveAssigneesResponse;
use App\Http\Responses\OpenApi\IssuesRemoveLabelResponse;
use App\Http\Responses\OpenApi\IssuesUnlockResponse;
use App\Http\Responses\OpenApi\IssuesUpdateCommentResponse;
use App\Http\Responses\OpenApi\IssuesUpdateLabelResponse;
use App\Http\Responses\OpenApi\IssuesUpdateMilestoneResponse;
use App\Http\Responses\OpenApi\IssuesUpdateResponse;
use App\Http\Responses\OpenApi\LicensesGetForRepoResponse;
use App\Http\Responses\OpenApi\MigrationsCancelImportResponse;
use App\Http\Responses\OpenApi\MigrationsGetCommitAuthorsResponse;
use App\Http\Responses\OpenApi\MigrationsGetImportStatusResponse;
use App\Http\Responses\OpenApi\MigrationsGetLargeFilesResponse;
use App\Http\Responses\OpenApi\MigrationsMapCommitAuthorResponse;
use App\Http\Responses\OpenApi\MigrationsSetLfsPreferenceResponse;
use App\Http\Responses\OpenApi\MigrationsStartImportResponse;
use App\Http\Responses\OpenApi\MigrationsUpdateImportResponse;
use App\Http\Responses\OpenApi\ProjectsCreateForRepoResponse;
use App\Http\Responses\OpenApi\ProjectsListForRepoResponse;
use App\Http\Responses\OpenApi\PullsCheckIfMergedResponse;
use App\Http\Responses\OpenApi\PullsCreateReplyForReviewCommentResponse;
use App\Http\Responses\OpenApi\PullsCreateResponse;
use App\Http\Responses\OpenApi\PullsCreateReviewCommentResponse;
use App\Http\Responses\OpenApi\PullsCreateReviewResponse;
use App\Http\Responses\OpenApi\PullsDeletePendingReviewResponse;
use App\Http\Responses\OpenApi\PullsDeleteReviewCommentResponse;
use App\Http\Responses\OpenApi\PullsDismissReviewResponse;
use App\Http\Responses\OpenApi\PullsGetResponse;
use App\Http\Responses\OpenApi\PullsGetReviewCommentResponse;
use App\Http\Responses\OpenApi\PullsGetReviewResponse;
use App\Http\Responses\OpenApi\PullsListCommentsForReviewResponse;
use App\Http\Responses\OpenApi\PullsListCommitsResponse;
use App\Http\Responses\OpenApi\PullsListFilesResponse;
use App\Http\Responses\OpenApi\PullsListRequestedReviewersResponse;
use App\Http\Responses\OpenApi\PullsListResponse;
use App\Http\Responses\OpenApi\PullsListReviewCommentsForRepoResponse;
use App\Http\Responses\OpenApi\PullsListReviewCommentsResponse;
use App\Http\Responses\OpenApi\PullsListReviewsResponse;
use App\Http\Responses\OpenApi\PullsMergeResponse;
use App\Http\Responses\OpenApi\PullsRemoveRequestedReviewersResponse;
use App\Http\Responses\OpenApi\PullsSubmitReviewResponse;
use App\Http\Responses\OpenApi\PullsUpdateBranchResponse;
use App\Http\Responses\OpenApi\PullsUpdateResponse;
use App\Http\Responses\OpenApi\PullsUpdateReviewCommentResponse;
use App\Http\Responses\OpenApi\PullsUpdateReviewResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForCommitCommentResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForIssueCommentResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForIssueResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForPullRequestReviewCommentResponse;
use App\Http\Responses\OpenApi\ReactionsCreateForReleaseResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForCommitCommentResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForIssueCommentResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForIssueResponse;
use App\Http\Responses\OpenApi\ReactionsDeleteForPullRequestCommentResponse;
use App\Http\Responses\OpenApi\ReactionsListForCommitCommentResponse;
use App\Http\Responses\OpenApi\ReactionsListForIssueCommentResponse;
use App\Http\Responses\OpenApi\ReactionsListForIssueResponse;
use App\Http\Responses\OpenApi\ReactionsListForPullRequestReviewCommentResponse;
use App\Http\Responses\OpenApi\ReposAddAppAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposAddCollaboratorResponse;
use App\Http\Responses\OpenApi\ReposAddStatusCheckContextsResponse;
use App\Http\Responses\OpenApi\ReposAddTeamAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposAddUserAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposCheckCollaboratorResponse;
use App\Http\Responses\OpenApi\ReposCheckVulnerabilityAlertsResponse;
use App\Http\Responses\OpenApi\ReposCompareCommitsResponse;
use App\Http\Responses\OpenApi\ReposCreateAutolinkResponse;
use App\Http\Responses\OpenApi\ReposCreateCommitCommentResponse;
use App\Http\Responses\OpenApi\ReposCreateCommitSignatureProtectionResponse;
use App\Http\Responses\OpenApi\ReposCreateCommitStatusResponse;
use App\Http\Responses\OpenApi\ReposCreateDeployKeyResponse;
use App\Http\Responses\OpenApi\ReposCreateDeploymentResponse;
use App\Http\Responses\OpenApi\ReposCreateDeploymentStatusResponse;
use App\Http\Responses\OpenApi\ReposCreateDispatchEventResponse;
use App\Http\Responses\OpenApi\ReposCreateForkResponse;
use App\Http\Responses\OpenApi\ReposCreateOrUpdateFileContentsResponse;
use App\Http\Responses\OpenApi\ReposCreatePagesSiteResponse;
use App\Http\Responses\OpenApi\ReposCreateReleaseResponse;
use App\Http\Responses\OpenApi\ReposCreateUsingTemplateResponse;
use App\Http\Responses\OpenApi\ReposCreateWebhookResponse;
use App\Http\Responses\OpenApi\ReposDeleteAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposDeleteAdminBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposDeleteAnEnvironmentResponse;
use App\Http\Responses\OpenApi\ReposDeleteAutolinkResponse;
use App\Http\Responses\OpenApi\ReposDeleteBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposDeleteCommitCommentResponse;
use App\Http\Responses\OpenApi\ReposDeleteCommitSignatureProtectionResponse;
use App\Http\Responses\OpenApi\ReposDeleteDeployKeyResponse;
use App\Http\Responses\OpenApi\ReposDeleteDeploymentResponse;
use App\Http\Responses\OpenApi\ReposDeleteFileResponse;
use App\Http\Responses\OpenApi\ReposDeleteInvitationResponse;
use App\Http\Responses\OpenApi\ReposDeletePagesSiteResponse;
use App\Http\Responses\OpenApi\ReposDeletePullRequestReviewProtectionResponse;
use App\Http\Responses\OpenApi\ReposDeleteReleaseAssetResponse;
use App\Http\Responses\OpenApi\ReposDeleteReleaseResponse;
use App\Http\Responses\OpenApi\ReposDeleteResponse;
use App\Http\Responses\OpenApi\ReposDeleteWebhookResponse;
use App\Http\Responses\OpenApi\ReposDisableAutomatedSecurityFixesResponse;
use App\Http\Responses\OpenApi\ReposDisableLfsForRepoResponse;
use App\Http\Responses\OpenApi\ReposDisableVulnerabilityAlertsResponse;
use App\Http\Responses\OpenApi\ReposEnableAutomatedSecurityFixesResponse;
use App\Http\Responses\OpenApi\ReposEnableLfsForRepoResponse;
use App\Http\Responses\OpenApi\ReposEnableVulnerabilityAlertsResponse;
use App\Http\Responses\OpenApi\ReposGetAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposGetAdminBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposGetAllStatusCheckContextsResponse;
use App\Http\Responses\OpenApi\ReposGetAllTopicsResponse;
use App\Http\Responses\OpenApi\ReposGetAppsWithAccessToProtectedBranchResponse;
use App\Http\Responses\OpenApi\ReposGetAutolinkResponse;
use App\Http\Responses\OpenApi\ReposGetBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposGetBranchResponse;
use App\Http\Responses\OpenApi\ReposGetClonesResponse;
use App\Http\Responses\OpenApi\ReposGetCodeFrequencyStatsResponse;
use App\Http\Responses\OpenApi\ReposGetCollaboratorPermissionLevelResponse;
use App\Http\Responses\OpenApi\ReposGetCombinedStatusForRefResponse;
use App\Http\Responses\OpenApi\ReposGetCommitActivityStatsResponse;
use App\Http\Responses\OpenApi\ReposGetCommitCommentResponse;
use App\Http\Responses\OpenApi\ReposGetCommitResponse;
use App\Http\Responses\OpenApi\ReposGetCommitSignatureProtectionResponse;
use App\Http\Responses\OpenApi\ReposGetCommunityProfileMetricsResponse;
use App\Http\Responses\OpenApi\ReposGetContributorsStatsResponse;
use App\Http\Responses\OpenApi\ReposGetDeployKeyResponse;
use App\Http\Responses\OpenApi\ReposGetDeploymentResponse;
use App\Http\Responses\OpenApi\ReposGetDeploymentStatusResponse;
use App\Http\Responses\OpenApi\ReposGetLatestPagesBuildResponse;
use App\Http\Responses\OpenApi\ReposGetLatestReleaseResponse;
use App\Http\Responses\OpenApi\ReposGetPagesBuildResponse;
use App\Http\Responses\OpenApi\ReposGetPagesHealthCheckResponse;
use App\Http\Responses\OpenApi\ReposGetPagesResponse;
use App\Http\Responses\OpenApi\ReposGetParticipationStatsResponse;
use App\Http\Responses\OpenApi\ReposGetPullRequestReviewProtectionResponse;
use App\Http\Responses\OpenApi\ReposGetPunchCardStatsResponse;
use App\Http\Responses\OpenApi\ReposGetReadmeInDirectoryResponse;
use App\Http\Responses\OpenApi\ReposGetReadmeResponse;
use App\Http\Responses\OpenApi\ReposGetReleaseAssetResponse;
use App\Http\Responses\OpenApi\ReposGetReleaseByTagResponse;
use App\Http\Responses\OpenApi\ReposGetReleaseResponse;
use App\Http\Responses\OpenApi\ReposGetResponse;
use App\Http\Responses\OpenApi\ReposGetStatusChecksProtectionResponse;
use App\Http\Responses\OpenApi\ReposGetTeamsWithAccessToProtectedBranchResponse;
use App\Http\Responses\OpenApi\ReposGetTopPathsResponse;
use App\Http\Responses\OpenApi\ReposGetTopReferrersResponse;
use App\Http\Responses\OpenApi\ReposGetUsersWithAccessToProtectedBranchResponse;
use App\Http\Responses\OpenApi\ReposGetViewsResponse;
use App\Http\Responses\OpenApi\ReposGetWebhookConfigForRepoResponse;
use App\Http\Responses\OpenApi\ReposGetWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\ReposGetWebhookResponse;
use App\Http\Responses\OpenApi\ReposListAutolinksResponse;
use App\Http\Responses\OpenApi\ReposListBranchesForHeadCommitResponse;
use App\Http\Responses\OpenApi\ReposListBranchesResponse;
use App\Http\Responses\OpenApi\ReposListCollaboratorsResponse;
use App\Http\Responses\OpenApi\ReposListCommentsForCommitResponse;
use App\Http\Responses\OpenApi\ReposListCommitCommentsForRepoResponse;
use App\Http\Responses\OpenApi\ReposListCommitStatusesForRefResponse;
use App\Http\Responses\OpenApi\ReposListCommitsResponse;
use App\Http\Responses\OpenApi\ReposListContributorsResponse;
use App\Http\Responses\OpenApi\ReposListDeployKeysResponse;
use App\Http\Responses\OpenApi\ReposListDeploymentStatusesResponse;
use App\Http\Responses\OpenApi\ReposListDeploymentsResponse;
use App\Http\Responses\OpenApi\ReposListForksResponse;
use App\Http\Responses\OpenApi\ReposListInvitationsResponse;
use App\Http\Responses\OpenApi\ReposListLanguagesResponse;
use App\Http\Responses\OpenApi\ReposListPagesBuildsResponse;
use App\Http\Responses\OpenApi\ReposListPullRequestsAssociatedWithCommitResponse;
use App\Http\Responses\OpenApi\ReposListReleaseAssetsResponse;
use App\Http\Responses\OpenApi\ReposListReleasesResponse;
use App\Http\Responses\OpenApi\ReposListTagsResponse;
use App\Http\Responses\OpenApi\ReposListTeamsResponse;
use App\Http\Responses\OpenApi\ReposListWebhookDeliveriesResponse;
use App\Http\Responses\OpenApi\ReposListWebhooksResponse;
use App\Http\Responses\OpenApi\ReposMergeResponse;
use App\Http\Responses\OpenApi\ReposMergeUpstreamResponse;
use App\Http\Responses\OpenApi\ReposPingWebhookResponse;
use App\Http\Responses\OpenApi\ReposRedeliverWebhookDeliveryResponse;
use App\Http\Responses\OpenApi\ReposRemoveAppAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposRemoveCollaboratorResponse;
use App\Http\Responses\OpenApi\ReposRemoveStatusCheckContextsResponse;
use App\Http\Responses\OpenApi\ReposRemoveStatusCheckProtectionResponse;
use App\Http\Responses\OpenApi\ReposRemoveTeamAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposRemoveUserAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposRenameBranchResponse;
use App\Http\Responses\OpenApi\ReposReplaceAllTopicsResponse;
use App\Http\Responses\OpenApi\ReposRequestPagesBuildResponse;
use App\Http\Responses\OpenApi\ReposSetAdminBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposSetAppAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposSetStatusCheckContextsResponse;
use App\Http\Responses\OpenApi\ReposSetTeamAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposSetUserAccessRestrictionsResponse;
use App\Http\Responses\OpenApi\ReposTestPushWebhookResponse;
use App\Http\Responses\OpenApi\ReposTransferResponse;
use App\Http\Responses\OpenApi\ReposUpdateBranchProtectionResponse;
use App\Http\Responses\OpenApi\ReposUpdateCommitCommentResponse;
use App\Http\Responses\OpenApi\ReposUpdateInvitationResponse;
use App\Http\Responses\OpenApi\ReposUpdatePullRequestReviewProtectionResponse;
use App\Http\Responses\OpenApi\ReposUpdateReleaseAssetResponse;
use App\Http\Responses\OpenApi\ReposUpdateReleaseResponse;
use App\Http\Responses\OpenApi\ReposUpdateResponse;
use App\Http\Responses\OpenApi\ReposUpdateStatusCheckProtectionResponse;
use App\Http\Responses\OpenApi\ReposUpdateWebhookConfigForRepoResponse;
use App\Http\Responses\OpenApi\ReposUpdateWebhookResponse;
use App\Http\Responses\OpenApi\ReposUploadReleaseAssetResponse;
use App\Http\Responses\OpenApi\SecretScanningGetAlertResponse;
use App\Http\Responses\OpenApi\SecretScanningListAlertsForRepoResponse;
use App\Http\Responses\OpenApi\SecretScanningUpdateAlertResponse;

final class RepoController extends BaseRepoController
{
    /**
     * POST /repos/{owner}/{repo}/actions/runs/{run_id}/approve
     *
     * Approve a workflow run for a fork pull request
     */
    public function actionsApproveWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsApproveWorkflowRunResponse
    {
        // TODO: Implement ActionsApproveWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel
     *
     * Cancel a workflow run
     */
    public function actionsCancelWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsCancelWorkflowRunResponse
    {
        // TODO: Implement ActionsCancelWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}
     *
     * Create or update a repository secret
     */
    public function actionsCreateOrUpdateRepoSecret(
        ActionsCreateOrUpdateRepoSecretRequest $request,
        string $owner,
        string $repo,
        string $secret_name,
    ): ActionsCreateOrUpdateRepoSecretResponse
    {
        // TODO: Implement ActionsCreateOrUpdateRepoSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runners/registration-token
     *
     * Create a registration token for a repository
     */
    public function actionsCreateRegistrationTokenForRepo(
        string $owner,
        string $repo,
    ): ActionsCreateRegistrationTokenForRepoResponse
    {
        // TODO: Implement ActionsCreateRegistrationTokenForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runners/remove-token
     *
     * Create a remove token for a repository
     */
    public function actionsCreateRemoveTokenForRepo(
        string $owner,
        string $repo,
    ): ActionsCreateRemoveTokenForRepoResponse
    {
        // TODO: Implement ActionsCreateRemoveTokenForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches
     *
     * Create a workflow dispatch event
     */
    public function actionsCreateWorkflowDispatch(
        ActionsCreateWorkflowDispatchRequest $request,
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsCreateWorkflowDispatchResponse
    {
        // TODO: Implement ActionsCreateWorkflowDispatch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}
     *
     * Delete an artifact
     */
    public function actionsDeleteArtifact(
        string $owner,
        string $repo,
        int $artifact_id,
    ): ActionsDeleteArtifactResponse
    {
        // TODO: Implement ActionsDeleteArtifact
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}
     *
     * Delete a repository secret
     */
    public function actionsDeleteRepoSecret(
        string $owner,
        string $repo,
        string $secret_name,
    ): ActionsDeleteRepoSecretResponse
    {
        // TODO: Implement ActionsDeleteRepoSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}
     *
     * Delete a self-hosted runner from a repository
     */
    public function actionsDeleteSelfHostedRunnerFromRepo(
        string $owner,
        string $repo,
        int $runner_id,
    ): ActionsDeleteSelfHostedRunnerFromRepoResponse
    {
        // TODO: Implement ActionsDeleteSelfHostedRunnerFromRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/actions/runs/{run_id}
     *
     * Delete a workflow run
     */
    public function actionsDeleteWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsDeleteWorkflowRunResponse
    {
        // TODO: Implement ActionsDeleteWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs
     *
     * Delete workflow run logs
     */
    public function actionsDeleteWorkflowRunLogs(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsDeleteWorkflowRunLogsResponse
    {
        // TODO: Implement ActionsDeleteWorkflowRunLogs
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable
     *
     * Disable a workflow
     */
    public function actionsDisableWorkflow(
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsDisableWorkflowResponse
    {
        // TODO: Implement ActionsDisableWorkflow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}
     *
     * Download an artifact
     */
    public function actionsDownloadArtifact(
        string $owner,
        string $repo,
        int $artifact_id,
        string $archive_format,
    ): void
    {
        // TODO: Implement ActionsDownloadArtifact
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs
     *
     * Download job logs for a workflow run
     */
    public function actionsDownloadJobLogsForWorkflowRun(
        string $owner,
        string $repo,
        int $job_id,
    ): void
    {
        // TODO: Implement ActionsDownloadJobLogsForWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs
     *
     * Download workflow run logs
     */
    public function actionsDownloadWorkflowRunLogs(
        string $owner,
        string $repo,
        int $run_id,
    ): void
    {
        // TODO: Implement ActionsDownloadWorkflowRunLogs
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable
     *
     * Enable a workflow
     */
    public function actionsEnableWorkflow(
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsEnableWorkflowResponse
    {
        // TODO: Implement ActionsEnableWorkflow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/permissions/selected-actions
     *
     * Get allowed actions for a repository
     */
    public function actionsGetAllowedActionsRepository(
        string $owner,
        string $repo,
    ): ActionsGetAllowedActionsRepositoryResponse
    {
        // TODO: Implement ActionsGetAllowedActionsRepository
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}
     *
     * Get an artifact
     */
    public function actionsGetArtifact(
        string $owner,
        string $repo,
        int $artifact_id,
    ): ActionsGetArtifactResponse
    {
        // TODO: Implement ActionsGetArtifact
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/permissions
     *
     * Get GitHub Actions permissions for a repository
     */
    public function actionsGetGithubActionsPermissionsRepository(
        string $owner,
        string $repo,
    ): ActionsGetGithubActionsPermissionsRepositoryResponse
    {
        // TODO: Implement ActionsGetGithubActionsPermissionsRepository
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/jobs/{job_id}
     *
     * Get a job for a workflow run
     */
    public function actionsGetJobForWorkflowRun(
        string $owner,
        string $repo,
        int $job_id,
    ): ActionsGetJobForWorkflowRunResponse
    {
        // TODO: Implement ActionsGetJobForWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/secrets/public-key
     *
     * Get a repository public key
     */
    public function actionsGetRepoPublicKey(
        string $owner,
        string $repo,
    ): ActionsGetRepoPublicKeyResponse
    {
        // TODO: Implement ActionsGetRepoPublicKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/secrets/{secret_name}
     *
     * Get a repository secret
     */
    public function actionsGetRepoSecret(
        string $owner,
        string $repo,
        string $secret_name,
    ): ActionsGetRepoSecretResponse
    {
        // TODO: Implement ActionsGetRepoSecret
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals
     *
     * Get the review history for a workflow run
     */
    public function actionsGetReviewsForRun(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsGetReviewsForRunResponse
    {
        // TODO: Implement ActionsGetReviewsForRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runners/{runner_id}
     *
     * Get a self-hosted runner for a repository
     */
    public function actionsGetSelfHostedRunnerForRepo(
        string $owner,
        string $repo,
        int $runner_id,
    ): ActionsGetSelfHostedRunnerForRepoResponse
    {
        // TODO: Implement ActionsGetSelfHostedRunnerForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}
     *
     * Get a workflow
     */
    public function actionsGetWorkflow(
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsGetWorkflowResponse
    {
        // TODO: Implement ActionsGetWorkflow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}
     *
     * Get a workflow run
     */
    public function actionsGetWorkflowRun(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsGetWorkflowRunResponse
    {
        // TODO: Implement ActionsGetWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing
     *
     * Get workflow run usage
     */
    public function actionsGetWorkflowRunUsage(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsGetWorkflowRunUsageResponse
    {
        // TODO: Implement ActionsGetWorkflowRunUsage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing
     *
     * Get workflow usage
     */
    public function actionsGetWorkflowUsage(
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsGetWorkflowUsageResponse
    {
        // TODO: Implement ActionsGetWorkflowUsage
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/artifacts
     *
     * List artifacts for a repository
     */
    public function actionsListArtifactsForRepo(
        ActionsListArtifactsForRepoRequest $request,
        string $owner,
        string $repo,
    ): ActionsListArtifactsForRepoResponse
    {
        // TODO: Implement ActionsListArtifactsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs
     *
     * List jobs for a workflow run
     */
    public function actionsListJobsForWorkflowRun(
        ActionsListJobsForWorkflowRunRequest $request,
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsListJobsForWorkflowRunResponse
    {
        // TODO: Implement ActionsListJobsForWorkflowRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/secrets
     *
     * List repository secrets
     */
    public function actionsListRepoSecrets(
        ActionsListRepoSecretsRequest $request,
        string $owner,
        string $repo,
    ): ActionsListRepoSecretsResponse
    {
        // TODO: Implement ActionsListRepoSecrets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/workflows
     *
     * List repository workflows
     */
    public function actionsListRepoWorkflows(
        ActionsListRepoWorkflowsRequest $request,
        string $owner,
        string $repo,
    ): ActionsListRepoWorkflowsResponse
    {
        // TODO: Implement ActionsListRepoWorkflows
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runners/downloads
     *
     * List runner applications for a repository
     */
    public function actionsListRunnerApplicationsForRepo(
        string $owner,
        string $repo,
    ): ActionsListRunnerApplicationsForRepoResponse
    {
        // TODO: Implement ActionsListRunnerApplicationsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runners
     *
     * List self-hosted runners for a repository
     */
    public function actionsListSelfHostedRunnersForRepo(
        ActionsListSelfHostedRunnersForRepoRequest $request,
        string $owner,
        string $repo,
    ): ActionsListSelfHostedRunnersForRepoResponse
    {
        // TODO: Implement ActionsListSelfHostedRunnersForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts
     *
     * List workflow run artifacts
     */
    public function actionsListWorkflowRunArtifacts(
        ActionsListWorkflowRunArtifactsRequest $request,
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsListWorkflowRunArtifactsResponse
    {
        // TODO: Implement ActionsListWorkflowRunArtifacts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs
     *
     * List workflow runs
     */
    public function actionsListWorkflowRuns(
        ActionsListWorkflowRunsRequest $request,
        string $owner,
        string $repo,
        int|string $workflow_id,
    ): ActionsListWorkflowRunsResponse
    {
        // TODO: Implement ActionsListWorkflowRuns
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/actions/runs
     *
     * List workflow runs for a repository
     */
    public function actionsListWorkflowRunsForRepo(
        ActionsListWorkflowRunsForRepoRequest $request,
        string $owner,
        string $repo,
    ): ActionsListWorkflowRunsForRepoResponse
    {
        // TODO: Implement ActionsListWorkflowRunsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun
     *
     * Re-run a workflow
     */
    public function actionsReRunWorkflow(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsReRunWorkflowResponse
    {
        // TODO: Implement ActionsReRunWorkflow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runs/{run_id}/retry
     *
     * Retry a workflow
     */
    public function actionsRetryWorkflow(
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsRetryWorkflowResponse
    {
        // TODO: Implement ActionsRetryWorkflow
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments
     *
     * Review pending deployments for a workflow run
     */
    public function actionsReviewPendingDeploymentsForRun(
        ActionsReviewPendingDeploymentsForRunRequest $request,
        string $owner,
        string $repo,
        int $run_id,
    ): ActionsReviewPendingDeploymentsForRunResponse
    {
        // TODO: Implement ActionsReviewPendingDeploymentsForRun
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/actions/permissions/selected-actions
     *
     * Set allowed actions for a repository
     */
    public function actionsSetAllowedActionsRepository(
        ActionsSetAllowedActionsRepositoryRequest $request,
        string $owner,
        string $repo,
    ): ActionsSetAllowedActionsRepositoryResponse
    {
        // TODO: Implement ActionsSetAllowedActionsRepository
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/actions/permissions
     *
     * Set GitHub Actions permissions for a repository
     */
    public function actionsSetGithubActionsPermissionsRepository(
        ActionsSetGithubActionsPermissionsRepositoryRequest $request,
        string $owner,
        string $repo,
    ): ActionsSetGithubActionsPermissionsRepositoryResponse
    {
        // TODO: Implement ActionsSetGithubActionsPermissionsRepository
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/subscription
     *
     * Delete a repository subscription
     */
    public function activityDeleteRepoSubscription(
        string $owner,
        string $repo,
    ): ActivityDeleteRepoSubscriptionResponse
    {
        // TODO: Implement ActivityDeleteRepoSubscription
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/subscription
     *
     * Get a repository subscription
     */
    public function activityGetRepoSubscription(
        string $owner,
        string $repo,
    ): ActivityGetRepoSubscriptionResponse
    {
        // TODO: Implement ActivityGetRepoSubscription
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/events
     *
     * List repository events
     */
    public function activityListRepoEvents(
        ActivityListRepoEventsRequest $request,
        string $owner,
        string $repo,
    ): ActivityListRepoEventsResponse
    {
        // TODO: Implement ActivityListRepoEvents
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/notifications
     *
     * List repository notifications for the authenticated user
     */
    public function activityListRepoNotificationsForAuthenticatedUser(
        ActivityListRepoNotificationsForAuthenticatedUserRequest $request,
        string $owner,
        string $repo,
    ): ActivityListRepoNotificationsForAuthenticatedUserResponse
    {
        // TODO: Implement ActivityListRepoNotificationsForAuthenticatedUser
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/subscribers
     *
     * List watchers
     */
    public function activityListWatchersForRepo(
        ActivityListWatchersForRepoRequest $request,
        string $owner,
        string $repo,
    ): ActivityListWatchersForRepoResponse
    {
        // TODO: Implement ActivityListWatchersForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/notifications
     *
     * Mark repository notifications as read
     */
    public function activityMarkRepoNotificationsAsRead(
        ActivityMarkRepoNotificationsAsReadRequest $request,
        string $owner,
        string $repo,
    ): ActivityMarkRepoNotificationsAsReadResponse
    {
        // TODO: Implement ActivityMarkRepoNotificationsAsRead
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/subscription
     *
     * Set a repository subscription
     */
    public function activitySetRepoSubscription(
        ActivitySetRepoSubscriptionRequest $request,
        string $owner,
        string $repo,
    ): ActivitySetRepoSubscriptionResponse
    {
        // TODO: Implement ActivitySetRepoSubscription
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/content_references/{content_reference_id}/attachments
     *
     * Create a content attachment
     */
    public function appsCreateContentAttachment(
        AppsCreateContentAttachmentRequest $request,
        string $owner,
        string $repo,
        int $content_reference_id,
    ): AppsCreateContentAttachmentResponse
    {
        // TODO: Implement AppsCreateContentAttachment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/check-runs
     *
     * Create a check run
     */
    public function checksCreate(
        ChecksCreateRequest $request,
        string $owner,
        string $repo,
    ): ChecksCreateResponse
    {
        // TODO: Implement ChecksCreate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/check-suites
     *
     * Create a check suite
     */
    public function checksCreateSuite(
        ChecksCreateSuiteRequest $request,
        string $owner,
        string $repo,
    ): ChecksCreateSuiteResponse
    {
        // TODO: Implement ChecksCreateSuite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/check-runs/{check_run_id}
     *
     * Get a check run
     */
    public function checksGet(
        string $owner,
        string $repo,
        int $check_run_id,
    ): ChecksGetResponse
    {
        // TODO: Implement ChecksGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/check-suites/{check_suite_id}
     *
     * Get a check suite
     */
    public function checksGetSuite(
        string $owner,
        string $repo,
        int $check_suite_id,
    ): ChecksGetSuiteResponse
    {
        // TODO: Implement ChecksGetSuite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations
     *
     * List check run annotations
     */
    public function checksListAnnotations(
        ChecksListAnnotationsRequest $request,
        string $owner,
        string $repo,
        int $check_run_id,
    ): ChecksListAnnotationsResponse
    {
        // TODO: Implement ChecksListAnnotations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{ref}/check-runs
     *
     * List check runs for a Git reference
     */
    public function checksListForRef(
        ChecksListForRefRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): ChecksListForRefResponse
    {
        // TODO: Implement ChecksListForRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs
     *
     * List check runs in a check suite
     */
    public function checksListForSuite(
        ChecksListForSuiteRequest $request,
        string $owner,
        string $repo,
        int $check_suite_id,
    ): ChecksListForSuiteResponse
    {
        // TODO: Implement ChecksListForSuite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{ref}/check-suites
     *
     * List check suites for a Git reference
     */
    public function checksListSuitesForRef(
        ChecksListSuitesForRefRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): ChecksListSuitesForRefResponse
    {
        // TODO: Implement ChecksListSuitesForRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest
     *
     * Rerequest a check suite
     */
    public function checksRerequestSuite(
        string $owner,
        string $repo,
        int $check_suite_id,
    ): ChecksRerequestSuiteResponse
    {
        // TODO: Implement ChecksRerequestSuite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/check-suites/preferences
     *
     * Update repository preferences for check suites
     */
    public function checksSetSuitesPreferences(
        ChecksSetSuitesPreferencesRequest $request,
        string $owner,
        string $repo,
    ): ChecksSetSuitesPreferencesResponse
    {
        // TODO: Implement ChecksSetSuitesPreferences
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}
     *
     * Delete a code scanning analysis from a repository
     */
    public function codeScanningDeleteAnalysis(
        CodeScanningDeleteAnalysisRequest $request,
        string $owner,
        string $repo,
        int $analysis_id,
    ): CodeScanningDeleteAnalysisResponse
    {
        // TODO: Implement CodeScanningDeleteAnalysis
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}
     *
     * Get a code scanning alert
     */
    public function codeScanningGetAlert(
        string $owner,
        string $repo,
        int $alert_number,
    ): CodeScanningGetAlertResponse
    {
        // TODO: Implement CodeScanningGetAlert
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}
     *
     * Get a code scanning analysis for a repository
     */
    public function codeScanningGetAnalysis(
        string $owner,
        string $repo,
        int $analysis_id,
    ): CodeScanningGetAnalysisResponse
    {
        // TODO: Implement CodeScanningGetAnalysis
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}
     *
     * Get information about a SARIF upload
     */
    public function codeScanningGetSarif(
        string $owner,
        string $repo,
        string $sarif_id,
    ): CodeScanningGetSarifResponse
    {
        // TODO: Implement CodeScanningGetSarif
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances
     *
     * List instances of a code scanning alert
     */
    public function codeScanningListAlertInstances(
        CodeScanningListAlertInstancesRequest $request,
        string $owner,
        string $repo,
        int $alert_number,
    ): CodeScanningListAlertInstancesResponse
    {
        // TODO: Implement CodeScanningListAlertInstances
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/alerts
     *
     * List code scanning alerts for a repository
     */
    public function codeScanningListAlertsForRepo(
        CodeScanningListAlertsForRepoRequest $request,
        string $owner,
        string $repo,
    ): CodeScanningListAlertsForRepoResponse
    {
        // TODO: Implement CodeScanningListAlertsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/code-scanning/analyses
     *
     * List code scanning analyses for a repository
     */
    public function codeScanningListRecentAnalyses(
        CodeScanningListRecentAnalysesRequest $request,
        string $owner,
        string $repo,
    ): CodeScanningListRecentAnalysesResponse
    {
        // TODO: Implement CodeScanningListRecentAnalyses
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}
     *
     * Update a code scanning alert
     */
    public function codeScanningUpdateAlert(
        CodeScanningUpdateAlertRequest $request,
        string $owner,
        string $repo,
        int $alert_number,
    ): CodeScanningUpdateAlertResponse
    {
        // TODO: Implement CodeScanningUpdateAlert
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/code-scanning/sarifs
     *
     * Upload an analysis as SARIF data
     */
    public function codeScanningUploadSarif(
        CodeScanningUploadSarifRequest $request,
        string $owner,
        string $repo,
    ): CodeScanningUploadSarifResponse
    {
        // TODO: Implement CodeScanningUploadSarif
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/git/blobs
     *
     * Create a blob
     */
    public function gitCreateBlob(
        GitCreateBlobRequest $request,
        string $owner,
        string $repo,
    ): GitCreateBlobResponse
    {
        // TODO: Implement GitCreateBlob
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/git/commits
     *
     * Create a commit
     */
    public function gitCreateCommit(
        GitCreateCommitRequest $request,
        string $owner,
        string $repo,
    ): GitCreateCommitResponse
    {
        // TODO: Implement GitCreateCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/git/refs
     *
     * Create a reference
     */
    public function gitCreateRef(
        GitCreateRefRequest $request,
        string $owner,
        string $repo,
    ): GitCreateRefResponse
    {
        // TODO: Implement GitCreateRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/git/tags
     *
     * Create a tag object
     */
    public function gitCreateTag(
        GitCreateTagRequest $request,
        string $owner,
        string $repo,
    ): GitCreateTagResponse
    {
        // TODO: Implement GitCreateTag
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/git/trees
     *
     * Create a tree
     */
    public function gitCreateTree(
        GitCreateTreeRequest $request,
        string $owner,
        string $repo,
    ): GitCreateTreeResponse
    {
        // TODO: Implement GitCreateTree
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/git/refs/{ref}
     *
     * Delete a reference
     */
    public function gitDeleteRef(
        string $owner,
        string $repo,
        string $ref,
    ): GitDeleteRefResponse
    {
        // TODO: Implement GitDeleteRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/blobs/{file_sha}
     *
     * Get a blob
     */
    public function gitGetBlob(
        string $owner,
        string $repo,
        string $file_sha,
    ): GitGetBlobResponse
    {
        // TODO: Implement GitGetBlob
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/commits/{commit_sha}
     *
     * Get a commit
     */
    public function gitGetCommit(
        string $owner,
        string $repo,
        string $commit_sha,
    ): GitGetCommitResponse
    {
        // TODO: Implement GitGetCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/ref/{ref}
     *
     * Get a reference
     */
    public function gitGetRef(
        string $owner,
        string $repo,
        string $ref,
    ): GitGetRefResponse
    {
        // TODO: Implement GitGetRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/tags/{tag_sha}
     *
     * Get a tag
     */
    public function gitGetTag(
        string $owner,
        string $repo,
        string $tag_sha,
    ): GitGetTagResponse
    {
        // TODO: Implement GitGetTag
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/trees/{tree_sha}
     *
     * Get a tree
     */
    public function gitGetTree(
        GitGetTreeRequest $request,
        string $owner,
        string $repo,
        string $tree_sha,
    ): GitGetTreeResponse
    {
        // TODO: Implement GitGetTree
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/git/matching-refs/{ref}
     *
     * List matching references
     */
    public function gitListMatchingRefs(
        GitListMatchingRefsRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): GitListMatchingRefsResponse
    {
        // TODO: Implement GitListMatchingRefs
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/git/refs/{ref}
     *
     * Update a reference
     */
    public function gitUpdateRef(
        GitUpdateRefRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): GitUpdateRefResponse
    {
        // TODO: Implement GitUpdateRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/interaction-limits
     *
     * Remove interaction restrictions for a repository
     */
    public function interactionsRemoveRestrictionsForRepo(
        string $owner,
        string $repo,
    ): InteractionsRemoveRestrictionsForRepoResponse
    {
        // TODO: Implement InteractionsRemoveRestrictionsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/interaction-limits
     *
     * Set interaction restrictions for a repository
     */
    public function interactionsSetRestrictionsForRepo(
        InteractionsSetRestrictionsForRepoRequest $request,
        string $owner,
        string $repo,
    ): InteractionsSetRestrictionsForRepoResponse
    {
        // TODO: Implement InteractionsSetRestrictionsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/issues/{issue_number}/assignees
     *
     * Add assignees to an issue
     */
    public function issuesAddAssignees(
        IssuesAddAssigneesRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesAddAssigneesResponse
    {
        // TODO: Implement IssuesAddAssignees
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/assignees/{assignee}
     *
     * Check if a user can be assigned
     */
    public function issuesCheckUserCanBeAssigned(
        string $owner,
        string $repo,
        string $assignee,
    ): IssuesCheckUserCanBeAssignedResponse
    {
        // TODO: Implement IssuesCheckUserCanBeAssigned
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/issues
     *
     * Create an issue
     */
    public function issuesCreate(
        IssuesCreateRequest $request,
        string $owner,
        string $repo,
    ): IssuesCreateResponse
    {
        // TODO: Implement IssuesCreate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/issues/{issue_number}/comments
     *
     * Create an issue comment
     */
    public function issuesCreateComment(
        IssuesCreateCommentRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesCreateCommentResponse
    {
        // TODO: Implement IssuesCreateComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/labels
     *
     * Create a label
     */
    public function issuesCreateLabel(
        IssuesCreateLabelRequest $request,
        string $owner,
        string $repo,
    ): IssuesCreateLabelResponse
    {
        // TODO: Implement IssuesCreateLabel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/milestones
     *
     * Create a milestone
     */
    public function issuesCreateMilestone(
        IssuesCreateMilestoneRequest $request,
        string $owner,
        string $repo,
    ): IssuesCreateMilestoneResponse
    {
        // TODO: Implement IssuesCreateMilestone
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}
     *
     * Delete an issue comment
     */
    public function issuesDeleteComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): IssuesDeleteCommentResponse
    {
        // TODO: Implement IssuesDeleteComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/labels/{name}
     *
     * Delete a label
     */
    public function issuesDeleteLabel(
        string $owner,
        string $repo,
        string $name,
    ): IssuesDeleteLabelResponse
    {
        // TODO: Implement IssuesDeleteLabel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/milestones/{milestone_number}
     *
     * Delete a milestone
     */
    public function issuesDeleteMilestone(
        string $owner,
        string $repo,
        int $milestone_number,
    ): IssuesDeleteMilestoneResponse
    {
        // TODO: Implement IssuesDeleteMilestone
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/{issue_number}
     *
     * Get an issue
     */
    public function issuesGet(
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesGetResponse
    {
        // TODO: Implement IssuesGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/comments/{comment_id}
     *
     * Get an issue comment
     */
    public function issuesGetComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): IssuesGetCommentResponse
    {
        // TODO: Implement IssuesGetComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/events/{event_id}
     *
     * Get an issue event
     */
    public function issuesGetEvent(
        string $owner,
        string $repo,
        int $event_id,
    ): IssuesGetEventResponse
    {
        // TODO: Implement IssuesGetEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/labels/{name}
     *
     * Get a label
     */
    public function issuesGetLabel(
        string $owner,
        string $repo,
        string $name,
    ): IssuesGetLabelResponse
    {
        // TODO: Implement IssuesGetLabel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/milestones/{milestone_number}
     *
     * Get a milestone
     */
    public function issuesGetMilestone(
        string $owner,
        string $repo,
        int $milestone_number,
    ): IssuesGetMilestoneResponse
    {
        // TODO: Implement IssuesGetMilestone
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/assignees
     *
     * List assignees
     */
    public function issuesListAssignees(
        IssuesListAssigneesRequest $request,
        string $owner,
        string $repo,
    ): IssuesListAssigneesResponse
    {
        // TODO: Implement IssuesListAssignees
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/{issue_number}/comments
     *
     * List issue comments
     */
    public function issuesListComments(
        IssuesListCommentsRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesListCommentsResponse
    {
        // TODO: Implement IssuesListComments
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/comments
     *
     * List issue comments for a repository
     */
    public function issuesListCommentsForRepo(
        IssuesListCommentsForRepoRequest $request,
        string $owner,
        string $repo,
    ): IssuesListCommentsForRepoResponse
    {
        // TODO: Implement IssuesListCommentsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/events
     *
     * List issue events for a repository
     */
    public function issuesListEventsForRepo(
        IssuesListEventsForRepoRequest $request,
        string $owner,
        string $repo,
    ): IssuesListEventsForRepoResponse
    {
        // TODO: Implement IssuesListEventsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues
     *
     * List repository issues
     */
    public function issuesListForRepo(
        IssuesListForRepoRequest $request,
        string $owner,
        string $repo,
    ): IssuesListForRepoResponse
    {
        // TODO: Implement IssuesListForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels
     *
     * List labels for issues in a milestone
     */
    public function issuesListLabelsForMilestone(
        IssuesListLabelsForMilestoneRequest $request,
        string $owner,
        string $repo,
        int $milestone_number,
    ): IssuesListLabelsForMilestoneResponse
    {
        // TODO: Implement IssuesListLabelsForMilestone
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/labels
     *
     * List labels for a repository
     */
    public function issuesListLabelsForRepo(
        IssuesListLabelsForRepoRequest $request,
        string $owner,
        string $repo,
    ): IssuesListLabelsForRepoResponse
    {
        // TODO: Implement IssuesListLabelsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/{issue_number}/labels
     *
     * List labels for an issue
     */
    public function issuesListLabelsOnIssue(
        IssuesListLabelsOnIssueRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesListLabelsOnIssueResponse
    {
        // TODO: Implement IssuesListLabelsOnIssue
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/milestones
     *
     * List milestones
     */
    public function issuesListMilestones(
        IssuesListMilestonesRequest $request,
        string $owner,
        string $repo,
    ): IssuesListMilestonesResponse
    {
        // TODO: Implement IssuesListMilestones
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/issues/{issue_number}/lock
     *
     * Lock an issue
     */
    public function issuesLock(
        IssuesLockRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesLockResponse
    {
        // TODO: Implement IssuesLock
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels
     *
     * Remove all labels from an issue
     */
    public function issuesRemoveAllLabels(
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesRemoveAllLabelsResponse
    {
        // TODO: Implement IssuesRemoveAllLabels
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees
     *
     * Remove assignees from an issue
     */
    public function issuesRemoveAssignees(
        IssuesRemoveAssigneesRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesRemoveAssigneesResponse
    {
        // TODO: Implement IssuesRemoveAssignees
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}
     *
     * Remove a label from an issue
     */
    public function issuesRemoveLabel(
        string $owner,
        string $repo,
        int $issue_number,
        string $name,
    ): IssuesRemoveLabelResponse
    {
        // TODO: Implement IssuesRemoveLabel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock
     *
     * Unlock an issue
     */
    public function issuesUnlock(
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesUnlockResponse
    {
        // TODO: Implement IssuesUnlock
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/issues/{issue_number}
     *
     * Update an issue
     */
    public function issuesUpdate(
        IssuesUpdateRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): IssuesUpdateResponse
    {
        // TODO: Implement IssuesUpdate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}
     *
     * Update an issue comment
     */
    public function issuesUpdateComment(
        IssuesUpdateCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): IssuesUpdateCommentResponse
    {
        // TODO: Implement IssuesUpdateComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/labels/{name}
     *
     * Update a label
     */
    public function issuesUpdateLabel(
        IssuesUpdateLabelRequest $request,
        string $owner,
        string $repo,
        string $name,
    ): IssuesUpdateLabelResponse
    {
        // TODO: Implement IssuesUpdateLabel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/milestones/{milestone_number}
     *
     * Update a milestone
     */
    public function issuesUpdateMilestone(
        IssuesUpdateMilestoneRequest $request,
        string $owner,
        string $repo,
        int $milestone_number,
    ): IssuesUpdateMilestoneResponse
    {
        // TODO: Implement IssuesUpdateMilestone
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/license
     *
     * Get the license for a repository
     */
    public function licensesGetForRepo(
        string $owner,
        string $repo,
    ): LicensesGetForRepoResponse
    {
        // TODO: Implement LicensesGetForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/import
     *
     * Cancel an import
     */
    public function migrationsCancelImport(
        string $owner,
        string $repo,
    ): MigrationsCancelImportResponse
    {
        // TODO: Implement MigrationsCancelImport
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/import/authors
     *
     * Get commit authors
     */
    public function migrationsGetCommitAuthors(
        MigrationsGetCommitAuthorsRequest $request,
        string $owner,
        string $repo,
    ): MigrationsGetCommitAuthorsResponse
    {
        // TODO: Implement MigrationsGetCommitAuthors
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/import
     *
     * Get an import status
     */
    public function migrationsGetImportStatus(
        string $owner,
        string $repo,
    ): MigrationsGetImportStatusResponse
    {
        // TODO: Implement MigrationsGetImportStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/import/large_files
     *
     * Get large files
     */
    public function migrationsGetLargeFiles(
        string $owner,
        string $repo,
    ): MigrationsGetLargeFilesResponse
    {
        // TODO: Implement MigrationsGetLargeFiles
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/import/authors/{author_id}
     *
     * Map a commit author
     */
    public function migrationsMapCommitAuthor(
        MigrationsMapCommitAuthorRequest $request,
        string $owner,
        string $repo,
        int $author_id,
    ): MigrationsMapCommitAuthorResponse
    {
        // TODO: Implement MigrationsMapCommitAuthor
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/import/lfs
     *
     * Update Git LFS preference
     */
    public function migrationsSetLfsPreference(
        MigrationsSetLfsPreferenceRequest $request,
        string $owner,
        string $repo,
    ): MigrationsSetLfsPreferenceResponse
    {
        // TODO: Implement MigrationsSetLfsPreference
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/import
     *
     * Start an import
     */
    public function migrationsStartImport(
        MigrationsStartImportRequest $request,
        string $owner,
        string $repo,
    ): MigrationsStartImportResponse
    {
        // TODO: Implement MigrationsStartImport
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/import
     *
     * Update an import
     */
    public function migrationsUpdateImport(
        MigrationsUpdateImportRequest $request,
        string $owner,
        string $repo,
    ): MigrationsUpdateImportResponse
    {
        // TODO: Implement MigrationsUpdateImport
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/projects
     *
     * Create a repository project
     */
    public function projectsCreateForRepo(
        ProjectsCreateForRepoRequest $request,
        string $owner,
        string $repo,
    ): ProjectsCreateForRepoResponse
    {
        // TODO: Implement ProjectsCreateForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/projects
     *
     * List repository projects
     */
    public function projectsListForRepo(
        ProjectsListForRepoRequest $request,
        string $owner,
        string $repo,
    ): ProjectsListForRepoResponse
    {
        // TODO: Implement ProjectsListForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/merge
     *
     * Check if a pull request has been merged
     */
    public function pullsCheckIfMerged(
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsCheckIfMergedResponse
    {
        // TODO: Implement PullsCheckIfMerged
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls
     *
     * Create a pull request
     */
    public function pullsCreate(
        PullsCreateRequest $request,
        string $owner,
        string $repo,
    ): PullsCreateResponse
    {
        // TODO: Implement PullsCreate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies
     *
     * Create a reply for a review comment
     */
    public function pullsCreateReplyForReviewComment(
        PullsCreateReplyForReviewCommentRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
        int $comment_id,
    ): PullsCreateReplyForReviewCommentResponse
    {
        // TODO: Implement PullsCreateReplyForReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews
     *
     * Create a review for a pull request
     */
    public function pullsCreateReview(
        PullsCreateReviewRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsCreateReviewResponse
    {
        // TODO: Implement PullsCreateReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls/{pull_number}/comments
     *
     * Create a review comment for a pull request
     */
    public function pullsCreateReviewComment(
        PullsCreateReviewCommentRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsCreateReviewCommentResponse
    {
        // TODO: Implement PullsCreateReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}
     *
     * Delete a pending review for a pull request
     */
    public function pullsDeletePendingReview(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsDeletePendingReviewResponse
    {
        // TODO: Implement PullsDeletePendingReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}
     *
     * Delete a review comment for a pull request
     */
    public function pullsDeleteReviewComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): PullsDeleteReviewCommentResponse
    {
        // TODO: Implement PullsDeleteReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals
     *
     * Dismiss a review for a pull request
     */
    public function pullsDismissReview(
        PullsDismissReviewRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsDismissReviewResponse
    {
        // TODO: Implement PullsDismissReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}
     *
     * Get a pull request
     */
    public function pullsGet(
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsGetResponse
    {
        // TODO: Implement PullsGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}
     *
     * Get a review for a pull request
     */
    public function pullsGetReview(
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsGetReviewResponse
    {
        // TODO: Implement PullsGetReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/comments/{comment_id}
     *
     * Get a review comment for a pull request
     */
    public function pullsGetReviewComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): PullsGetReviewCommentResponse
    {
        // TODO: Implement PullsGetReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls
     *
     * List pull requests
     */
    public function pullsList(
        PullsListRequest $request,
        string $owner,
        string $repo,
    ): PullsListResponse
    {
        // TODO: Implement PullsList
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments
     *
     * List comments for a pull request review
     */
    public function pullsListCommentsForReview(
        PullsListCommentsForReviewRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsListCommentsForReviewResponse
    {
        // TODO: Implement PullsListCommentsForReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/commits
     *
     * List commits on a pull request
     */
    public function pullsListCommits(
        PullsListCommitsRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsListCommitsResponse
    {
        // TODO: Implement PullsListCommits
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/files
     *
     * List pull requests files
     */
    public function pullsListFiles(
        PullsListFilesRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsListFilesResponse
    {
        // TODO: Implement PullsListFiles
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers
     *
     * List requested reviewers for a pull request
     */
    public function pullsListRequestedReviewers(
        PullsListRequestedReviewersRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsListRequestedReviewersResponse
    {
        // TODO: Implement PullsListRequestedReviewers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/comments
     *
     * List review comments on a pull request
     */
    public function pullsListReviewComments(
        PullsListReviewCommentsRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsListReviewCommentsResponse
    {
        // TODO: Implement PullsListReviewComments
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/comments
     *
     * List review comments in a repository
     */
    public function pullsListReviewCommentsForRepo(
        PullsListReviewCommentsForRepoRequest $request,
        string $owner,
        string $repo,
    ): PullsListReviewCommentsForRepoResponse
    {
        // TODO: Implement PullsListReviewCommentsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews
     *
     * List reviews for a pull request
     */
    public function pullsListReviews(
        PullsListReviewsRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsListReviewsResponse
    {
        // TODO: Implement PullsListReviews
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge
     *
     * Merge a pull request
     */
    public function pullsMerge(
        PullsMergeRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsMergeResponse
    {
        // TODO: Implement PullsMerge
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers
     *
     * Remove requested reviewers from a pull request
     */
    public function pullsRemoveRequestedReviewers(
        PullsRemoveRequestedReviewersRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsRemoveRequestedReviewersResponse
    {
        // TODO: Implement PullsRemoveRequestedReviewers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events
     *
     * Submit a review for a pull request
     */
    public function pullsSubmitReview(
        PullsSubmitReviewRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsSubmitReviewResponse
    {
        // TODO: Implement PullsSubmitReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/pulls/{pull_number}
     *
     * Update a pull request
     */
    public function pullsUpdate(
        PullsUpdateRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsUpdateResponse
    {
        // TODO: Implement PullsUpdate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch
     *
     * Update a pull request branch
     */
    public function pullsUpdateBranch(
        PullsUpdateBranchRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
    ): PullsUpdateBranchResponse
    {
        // TODO: Implement PullsUpdateBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}
     *
     * Update a review for a pull request
     */
    public function pullsUpdateReview(
        PullsUpdateReviewRequest $request,
        string $owner,
        string $repo,
        int $pull_number,
        int $review_id,
    ): PullsUpdateReviewResponse
    {
        // TODO: Implement PullsUpdateReview
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}
     *
     * Update a review comment for a pull request
     */
    public function pullsUpdateReviewComment(
        PullsUpdateReviewCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): PullsUpdateReviewCommentResponse
    {
        // TODO: Implement PullsUpdateReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/comments/{comment_id}/reactions
     *
     * Create reaction for a commit comment
     */
    public function reactionsCreateForCommitComment(
        ReactionsCreateForCommitCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsCreateForCommitCommentResponse
    {
        // TODO: Implement ReactionsCreateForCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/issues/{issue_number}/reactions
     *
     * Create reaction for an issue
     */
    public function reactionsCreateForIssue(
        ReactionsCreateForIssueRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): ReactionsCreateForIssueResponse
    {
        // TODO: Implement ReactionsCreateForIssue
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions
     *
     * Create reaction for an issue comment
     */
    public function reactionsCreateForIssueComment(
        ReactionsCreateForIssueCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsCreateForIssueCommentResponse
    {
        // TODO: Implement ReactionsCreateForIssueComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions
     *
     * Create reaction for a pull request review comment
     */
    public function reactionsCreateForPullRequestReviewComment(
        ReactionsCreateForPullRequestReviewCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsCreateForPullRequestReviewCommentResponse
    {
        // TODO: Implement ReactionsCreateForPullRequestReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/releases/{release_id}/reactions
     *
     * Create reaction for a release
     */
    public function reactionsCreateForRelease(
        ReactionsCreateForReleaseRequest $request,
        string $owner,
        string $repo,
        int $release_id,
    ): ReactionsCreateForReleaseResponse
    {
        // TODO: Implement ReactionsCreateForRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}
     *
     * Delete a commit comment reaction
     */
    public function reactionsDeleteForCommitComment(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id,
    ): ReactionsDeleteForCommitCommentResponse
    {
        // TODO: Implement ReactionsDeleteForCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}
     *
     * Delete an issue reaction
     */
    public function reactionsDeleteForIssue(
        string $owner,
        string $repo,
        int $issue_number,
        int $reaction_id,
    ): ReactionsDeleteForIssueResponse
    {
        // TODO: Implement ReactionsDeleteForIssue
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}
     *
     * Delete an issue comment reaction
     */
    public function reactionsDeleteForIssueComment(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id,
    ): ReactionsDeleteForIssueCommentResponse
    {
        // TODO: Implement ReactionsDeleteForIssueComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}
     *
     * Delete a pull request comment reaction
     */
    public function reactionsDeleteForPullRequestComment(
        string $owner,
        string $repo,
        int $comment_id,
        int $reaction_id,
    ): ReactionsDeleteForPullRequestCommentResponse
    {
        // TODO: Implement ReactionsDeleteForPullRequestComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/comments/{comment_id}/reactions
     *
     * List reactions for a commit comment
     */
    public function reactionsListForCommitComment(
        ReactionsListForCommitCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsListForCommitCommentResponse
    {
        // TODO: Implement ReactionsListForCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/{issue_number}/reactions
     *
     * List reactions for an issue
     */
    public function reactionsListForIssue(
        ReactionsListForIssueRequest $request,
        string $owner,
        string $repo,
        int $issue_number,
    ): ReactionsListForIssueResponse
    {
        // TODO: Implement ReactionsListForIssue
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions
     *
     * List reactions for an issue comment
     */
    public function reactionsListForIssueComment(
        ReactionsListForIssueCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsListForIssueCommentResponse
    {
        // TODO: Implement ReactionsListForIssueComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions
     *
     * List reactions for a pull request review comment
     */
    public function reactionsListForPullRequestReviewComment(
        ReactionsListForPullRequestReviewCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReactionsListForPullRequestReviewCommentResponse
    {
        // TODO: Implement ReactionsListForPullRequestReviewComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps
     *
     * Add app access restrictions
     */
    public function reposAddAppAccessRestrictions(
        ReposAddAppAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposAddAppAccessRestrictionsResponse
    {
        // TODO: Implement ReposAddAppAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/collaborators/{username}
     *
     * Add a repository collaborator
     */
    public function reposAddCollaborator(
        ReposAddCollaboratorRequest $request,
        string $owner,
        string $repo,
        string $username,
    ): ReposAddCollaboratorResponse
    {
        // TODO: Implement ReposAddCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts
     *
     * Add status check contexts
     */
    public function reposAddStatusCheckContexts(
        ReposAddStatusCheckContextsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposAddStatusCheckContextsResponse
    {
        // TODO: Implement ReposAddStatusCheckContexts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams
     *
     * Add team access restrictions
     */
    public function reposAddTeamAccessRestrictions(
        ReposAddTeamAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposAddTeamAccessRestrictionsResponse
    {
        // TODO: Implement ReposAddTeamAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users
     *
     * Add user access restrictions
     */
    public function reposAddUserAccessRestrictions(
        ReposAddUserAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposAddUserAccessRestrictionsResponse
    {
        // TODO: Implement ReposAddUserAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/collaborators/{username}
     *
     * Check if a user is a repository collaborator
     */
    public function reposCheckCollaborator(
        string $owner,
        string $repo,
        string $username,
    ): ReposCheckCollaboratorResponse
    {
        // TODO: Implement ReposCheckCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/vulnerability-alerts
     *
     * Check if vulnerability alerts are enabled for a repository
     */
    public function reposCheckVulnerabilityAlerts(
        string $owner,
        string $repo,
    ): ReposCheckVulnerabilityAlertsResponse
    {
        // TODO: Implement ReposCheckVulnerabilityAlerts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/compare/{basehead}
     *
     * Compare two commits
     */
    public function reposCompareCommits(
        ReposCompareCommitsRequest $request,
        string $owner,
        string $repo,
        string $basehead,
    ): ReposCompareCommitsResponse
    {
        // TODO: Implement ReposCompareCommits
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/autolinks
     *
     * Create an autolink reference for a repository
     */
    public function reposCreateAutolink(
        ReposCreateAutolinkRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateAutolinkResponse
    {
        // TODO: Implement ReposCreateAutolink
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/commits/{commit_sha}/comments
     *
     * Create a commit comment
     */
    public function reposCreateCommitComment(
        ReposCreateCommitCommentRequest $request,
        string $owner,
        string $repo,
        string $commit_sha,
    ): ReposCreateCommitCommentResponse
    {
        // TODO: Implement ReposCreateCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures
     *
     * Create commit signature protection
     */
    public function reposCreateCommitSignatureProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposCreateCommitSignatureProtectionResponse
    {
        // TODO: Implement ReposCreateCommitSignatureProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/statuses/{sha}
     *
     * Create a commit status
     */
    public function reposCreateCommitStatus(
        ReposCreateCommitStatusRequest $request,
        string $owner,
        string $repo,
        string $sha,
    ): ReposCreateCommitStatusResponse
    {
        // TODO: Implement ReposCreateCommitStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/keys
     *
     * Create a deploy key
     */
    public function reposCreateDeployKey(
        ReposCreateDeployKeyRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateDeployKeyResponse
    {
        // TODO: Implement ReposCreateDeployKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/deployments
     *
     * Create a deployment
     */
    public function reposCreateDeployment(
        ReposCreateDeploymentRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateDeploymentResponse
    {
        // TODO: Implement ReposCreateDeployment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses
     *
     * Create a deployment status
     */
    public function reposCreateDeploymentStatus(
        ReposCreateDeploymentStatusRequest $request,
        string $owner,
        string $repo,
        int $deployment_id,
    ): ReposCreateDeploymentStatusResponse
    {
        // TODO: Implement ReposCreateDeploymentStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/dispatches
     *
     * Create a repository dispatch event
     */
    public function reposCreateDispatchEvent(
        ReposCreateDispatchEventRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateDispatchEventResponse
    {
        // TODO: Implement ReposCreateDispatchEvent
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/forks
     *
     * Create a fork
     */
    public function reposCreateFork(
        ReposCreateForkRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateForkResponse
    {
        // TODO: Implement ReposCreateFork
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/contents/{path}
     *
     * Create or update file contents
     */
    public function reposCreateOrUpdateFileContents(
        ReposCreateOrUpdateFileContentsRequest $request,
        string $owner,
        string $repo,
        string $path,
    ): ReposCreateOrUpdateFileContentsResponse
    {
        // TODO: Implement ReposCreateOrUpdateFileContents
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pages
     *
     * Create a GitHub Pages site
     */
    public function reposCreatePagesSite(
        ReposCreatePagesSiteRequest $request,
        string $owner,
        string $repo,
    ): ReposCreatePagesSiteResponse
    {
        // TODO: Implement ReposCreatePagesSite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/releases
     *
     * Create a release
     */
    public function reposCreateRelease(
        ReposCreateReleaseRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateReleaseResponse
    {
        // TODO: Implement ReposCreateRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{template_owner}/{template_repo}/generate
     *
     * Create a repository using a template
     */
    public function reposCreateUsingTemplate(
        ReposCreateUsingTemplateRequest $request,
        string $template_owner,
        string $template_repo,
    ): ReposCreateUsingTemplateResponse
    {
        // TODO: Implement ReposCreateUsingTemplate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/hooks
     *
     * Create a repository webhook
     */
    public function reposCreateWebhook(
        ReposCreateWebhookRequest $request,
        string $owner,
        string $repo,
    ): ReposCreateWebhookResponse
    {
        // TODO: Implement ReposCreateWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}
     *
     * Delete a repository
     */
    public function reposDelete(
        string $owner,
        string $repo,
    ): ReposDeleteResponse
    {
        // TODO: Implement ReposDelete
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions
     *
     * Delete access restrictions
     */
    public function reposDeleteAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
    ): ReposDeleteAccessRestrictionsResponse
    {
        // TODO: Implement ReposDeleteAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins
     *
     * Delete admin branch protection
     */
    public function reposDeleteAdminBranchProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposDeleteAdminBranchProtectionResponse
    {
        // TODO: Implement ReposDeleteAdminBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/environments/{environment_name}
     *
     * Delete an environment
     */
    public function reposDeleteAnEnvironment(
        string $owner,
        string $repo,
        string $environment_name,
    ): ReposDeleteAnEnvironmentResponse
    {
        // TODO: Implement ReposDeleteAnEnvironment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}
     *
     * Delete an autolink reference from a repository
     */
    public function reposDeleteAutolink(
        string $owner,
        string $repo,
        int $autolink_id,
    ): ReposDeleteAutolinkResponse
    {
        // TODO: Implement ReposDeleteAutolink
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection
     *
     * Delete branch protection
     */
    public function reposDeleteBranchProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposDeleteBranchProtectionResponse
    {
        // TODO: Implement ReposDeleteBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/comments/{comment_id}
     *
     * Delete a commit comment
     */
    public function reposDeleteCommitComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): ReposDeleteCommitCommentResponse
    {
        // TODO: Implement ReposDeleteCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures
     *
     * Delete commit signature protection
     */
    public function reposDeleteCommitSignatureProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposDeleteCommitSignatureProtectionResponse
    {
        // TODO: Implement ReposDeleteCommitSignatureProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/keys/{key_id}
     *
     * Delete a deploy key
     */
    public function reposDeleteDeployKey(
        string $owner,
        string $repo,
        int $key_id,
    ): ReposDeleteDeployKeyResponse
    {
        // TODO: Implement ReposDeleteDeployKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/deployments/{deployment_id}
     *
     * Delete a deployment
     */
    public function reposDeleteDeployment(
        string $owner,
        string $repo,
        int $deployment_id,
    ): ReposDeleteDeploymentResponse
    {
        // TODO: Implement ReposDeleteDeployment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/contents/{path}
     *
     * Delete a file
     */
    public function reposDeleteFile(
        ReposDeleteFileRequest $request,
        string $owner,
        string $repo,
        string $path,
    ): ReposDeleteFileResponse
    {
        // TODO: Implement ReposDeleteFile
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/invitations/{invitation_id}
     *
     * Delete a repository invitation
     */
    public function reposDeleteInvitation(
        string $owner,
        string $repo,
        int $invitation_id,
    ): ReposDeleteInvitationResponse
    {
        // TODO: Implement ReposDeleteInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/pages
     *
     * Delete a GitHub Pages site
     */
    public function reposDeletePagesSite(
        string $owner,
        string $repo,
    ): ReposDeletePagesSiteResponse
    {
        // TODO: Implement ReposDeletePagesSite
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews
     *
     * Delete pull request review protection
     */
    public function reposDeletePullRequestReviewProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposDeletePullRequestReviewProtectionResponse
    {
        // TODO: Implement ReposDeletePullRequestReviewProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/releases/{release_id}
     *
     * Delete a release
     */
    public function reposDeleteRelease(
        string $owner,
        string $repo,
        int $release_id,
    ): ReposDeleteReleaseResponse
    {
        // TODO: Implement ReposDeleteRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}
     *
     * Delete a release asset
     */
    public function reposDeleteReleaseAsset(
        string $owner,
        string $repo,
        int $asset_id,
    ): ReposDeleteReleaseAssetResponse
    {
        // TODO: Implement ReposDeleteReleaseAsset
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/hooks/{hook_id}
     *
     * Delete a repository webhook
     */
    public function reposDeleteWebhook(
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposDeleteWebhookResponse
    {
        // TODO: Implement ReposDeleteWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/automated-security-fixes
     *
     * Disable automated security fixes
     */
    public function reposDisableAutomatedSecurityFixes(
        string $owner,
        string $repo,
    ): ReposDisableAutomatedSecurityFixesResponse
    {
        // TODO: Implement ReposDisableAutomatedSecurityFixes
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/lfs
     *
     * Disable Git LFS for a repository
     */
    public function reposDisableLfsForRepo(
        string $owner,
        string $repo,
    ): ReposDisableLfsForRepoResponse
    {
        // TODO: Implement ReposDisableLfsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/vulnerability-alerts
     *
     * Disable vulnerability alerts
     */
    public function reposDisableVulnerabilityAlerts(
        string $owner,
        string $repo,
    ): ReposDisableVulnerabilityAlertsResponse
    {
        // TODO: Implement ReposDisableVulnerabilityAlerts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/tarball/{ref}
     *
     * Download a repository archive (tar)
     */
    public function reposDownloadTarballArchive(
        string $owner,
        string $repo,
        string $ref,
    ): void
    {
        // TODO: Implement ReposDownloadTarballArchive
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/zipball/{ref}
     *
     * Download a repository archive (zip)
     */
    public function reposDownloadZipballArchive(
        string $owner,
        string $repo,
        string $ref,
    ): void
    {
        // TODO: Implement ReposDownloadZipballArchive
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/automated-security-fixes
     *
     * Enable automated security fixes
     */
    public function reposEnableAutomatedSecurityFixes(
        string $owner,
        string $repo,
    ): ReposEnableAutomatedSecurityFixesResponse
    {
        // TODO: Implement ReposEnableAutomatedSecurityFixes
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/lfs
     *
     * Enable Git LFS for a repository
     */
    public function reposEnableLfsForRepo(
        string $owner,
        string $repo,
    ): ReposEnableLfsForRepoResponse
    {
        // TODO: Implement ReposEnableLfsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/vulnerability-alerts
     *
     * Enable vulnerability alerts
     */
    public function reposEnableVulnerabilityAlerts(
        string $owner,
        string $repo,
    ): ReposEnableVulnerabilityAlertsResponse
    {
        // TODO: Implement ReposEnableVulnerabilityAlerts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}
     *
     * Get a repository
     */
    public function reposGet(
        string $owner,
        string $repo,
    ): ReposGetResponse
    {
        // TODO: Implement ReposGet
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions
     *
     * Get access restrictions
     */
    public function reposGetAccessRestrictions(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetAccessRestrictionsResponse
    {
        // TODO: Implement ReposGetAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins
     *
     * Get admin branch protection
     */
    public function reposGetAdminBranchProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetAdminBranchProtectionResponse
    {
        // TODO: Implement ReposGetAdminBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts
     *
     * Get all status check contexts
     */
    public function reposGetAllStatusCheckContexts(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetAllStatusCheckContextsResponse
    {
        // TODO: Implement ReposGetAllStatusCheckContexts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/topics
     *
     * Get all repository topics
     */
    public function reposGetAllTopics(
        ReposGetAllTopicsRequest $request,
        string $owner,
        string $repo,
    ): ReposGetAllTopicsResponse
    {
        // TODO: Implement ReposGetAllTopics
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps
     *
     * Get apps with access to the protected branch
     */
    public function reposGetAppsWithAccessToProtectedBranch(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetAppsWithAccessToProtectedBranchResponse
    {
        // TODO: Implement ReposGetAppsWithAccessToProtectedBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/autolinks/{autolink_id}
     *
     * Get an autolink reference of a repository
     */
    public function reposGetAutolink(
        string $owner,
        string $repo,
        int $autolink_id,
    ): ReposGetAutolinkResponse
    {
        // TODO: Implement ReposGetAutolink
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}
     *
     * Get a branch
     */
    public function reposGetBranch(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetBranchResponse
    {
        // TODO: Implement ReposGetBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection
     *
     * Get branch protection
     */
    public function reposGetBranchProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetBranchProtectionResponse
    {
        // TODO: Implement ReposGetBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/traffic/clones
     *
     * Get repository clones
     */
    public function reposGetClones(
        ReposGetClonesRequest $request,
        string $owner,
        string $repo,
    ): ReposGetClonesResponse
    {
        // TODO: Implement ReposGetClones
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/stats/code_frequency
     *
     * Get the weekly commit activity
     */
    public function reposGetCodeFrequencyStats(
        string $owner,
        string $repo,
    ): ReposGetCodeFrequencyStatsResponse
    {
        // TODO: Implement ReposGetCodeFrequencyStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/collaborators/{username}/permission
     *
     * Get repository permissions for a user
     */
    public function reposGetCollaboratorPermissionLevel(
        string $owner,
        string $repo,
        string $username,
    ): ReposGetCollaboratorPermissionLevelResponse
    {
        // TODO: Implement ReposGetCollaboratorPermissionLevel
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{ref}/status
     *
     * Get the combined status for a specific reference
     */
    public function reposGetCombinedStatusForRef(
        ReposGetCombinedStatusForRefRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): ReposGetCombinedStatusForRefResponse
    {
        // TODO: Implement ReposGetCombinedStatusForRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{ref}
     *
     * Get a commit
     */
    public function reposGetCommit(
        ReposGetCommitRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): ReposGetCommitResponse
    {
        // TODO: Implement ReposGetCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/stats/commit_activity
     *
     * Get the last year of commit activity
     */
    public function reposGetCommitActivityStats(
        string $owner,
        string $repo,
    ): ReposGetCommitActivityStatsResponse
    {
        // TODO: Implement ReposGetCommitActivityStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/comments/{comment_id}
     *
     * Get a commit comment
     */
    public function reposGetCommitComment(
        string $owner,
        string $repo,
        int $comment_id,
    ): ReposGetCommitCommentResponse
    {
        // TODO: Implement ReposGetCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures
     *
     * Get commit signature protection
     */
    public function reposGetCommitSignatureProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetCommitSignatureProtectionResponse
    {
        // TODO: Implement ReposGetCommitSignatureProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/community/profile
     *
     * Get community profile metrics
     */
    public function reposGetCommunityProfileMetrics(
        string $owner,
        string $repo,
    ): ReposGetCommunityProfileMetricsResponse
    {
        // TODO: Implement ReposGetCommunityProfileMetrics
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/stats/contributors
     *
     * Get all contributor commit activity
     */
    public function reposGetContributorsStats(
        string $owner,
        string $repo,
    ): ReposGetContributorsStatsResponse
    {
        // TODO: Implement ReposGetContributorsStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/keys/{key_id}
     *
     * Get a deploy key
     */
    public function reposGetDeployKey(
        string $owner,
        string $repo,
        int $key_id,
    ): ReposGetDeployKeyResponse
    {
        // TODO: Implement ReposGetDeployKey
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/deployments/{deployment_id}
     *
     * Get a deployment
     */
    public function reposGetDeployment(
        string $owner,
        string $repo,
        int $deployment_id,
    ): ReposGetDeploymentResponse
    {
        // TODO: Implement ReposGetDeployment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}
     *
     * Get a deployment status
     */
    public function reposGetDeploymentStatus(
        string $owner,
        string $repo,
        int $deployment_id,
        int $status_id,
    ): ReposGetDeploymentStatusResponse
    {
        // TODO: Implement ReposGetDeploymentStatus
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pages/builds/latest
     *
     * Get latest Pages build
     */
    public function reposGetLatestPagesBuild(
        string $owner,
        string $repo,
    ): ReposGetLatestPagesBuildResponse
    {
        // TODO: Implement ReposGetLatestPagesBuild
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases/latest
     *
     * Get the latest release
     */
    public function reposGetLatestRelease(
        string $owner,
        string $repo,
    ): ReposGetLatestReleaseResponse
    {
        // TODO: Implement ReposGetLatestRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pages
     *
     * Get a GitHub Pages site
     */
    public function reposGetPages(
        string $owner,
        string $repo,
    ): ReposGetPagesResponse
    {
        // TODO: Implement ReposGetPages
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pages/builds/{build_id}
     *
     * Get GitHub Pages build
     */
    public function reposGetPagesBuild(
        string $owner,
        string $repo,
        int $build_id,
    ): ReposGetPagesBuildResponse
    {
        // TODO: Implement ReposGetPagesBuild
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pages/health
     *
     * Get a DNS health check for GitHub Pages
     */
    public function reposGetPagesHealthCheck(
        string $owner,
        string $repo,
    ): ReposGetPagesHealthCheckResponse
    {
        // TODO: Implement ReposGetPagesHealthCheck
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/stats/participation
     *
     * Get the weekly commit count
     */
    public function reposGetParticipationStats(
        string $owner,
        string $repo,
    ): ReposGetParticipationStatsResponse
    {
        // TODO: Implement ReposGetParticipationStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews
     *
     * Get pull request review protection
     */
    public function reposGetPullRequestReviewProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetPullRequestReviewProtectionResponse
    {
        // TODO: Implement ReposGetPullRequestReviewProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/stats/punch_card
     *
     * Get the hourly commit count for each day
     */
    public function reposGetPunchCardStats(
        string $owner,
        string $repo,
    ): ReposGetPunchCardStatsResponse
    {
        // TODO: Implement ReposGetPunchCardStats
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/readme
     *
     * Get a repository README
     */
    public function reposGetReadme(
        ReposGetReadmeRequest $request,
        string $owner,
        string $repo,
    ): ReposGetReadmeResponse
    {
        // TODO: Implement ReposGetReadme
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/readme/{dir}
     *
     * Get a repository README for a directory
     */
    public function reposGetReadmeInDirectory(
        ReposGetReadmeInDirectoryRequest $request,
        string $owner,
        string $repo,
        string $dir,
    ): ReposGetReadmeInDirectoryResponse
    {
        // TODO: Implement ReposGetReadmeInDirectory
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases/{release_id}
     *
     * Get a release
     */
    public function reposGetRelease(
        string $owner,
        string $repo,
        int $release_id,
    ): ReposGetReleaseResponse
    {
        // TODO: Implement ReposGetRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases/assets/{asset_id}
     *
     * Get a release asset
     */
    public function reposGetReleaseAsset(
        string $owner,
        string $repo,
        int $asset_id,
    ): ReposGetReleaseAssetResponse
    {
        // TODO: Implement ReposGetReleaseAsset
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases/tags/{tag}
     *
     * Get a release by tag name
     */
    public function reposGetReleaseByTag(
        string $owner,
        string $repo,
        string $tag,
    ): ReposGetReleaseByTagResponse
    {
        // TODO: Implement ReposGetReleaseByTag
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks
     *
     * Get status checks protection
     */
    public function reposGetStatusChecksProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetStatusChecksProtectionResponse
    {
        // TODO: Implement ReposGetStatusChecksProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams
     *
     * Get teams with access to the protected branch
     */
    public function reposGetTeamsWithAccessToProtectedBranch(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetTeamsWithAccessToProtectedBranchResponse
    {
        // TODO: Implement ReposGetTeamsWithAccessToProtectedBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/traffic/popular/paths
     *
     * Get top referral paths
     */
    public function reposGetTopPaths(
        string $owner,
        string $repo,
    ): ReposGetTopPathsResponse
    {
        // TODO: Implement ReposGetTopPaths
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/traffic/popular/referrers
     *
     * Get top referral sources
     */
    public function reposGetTopReferrers(
        string $owner,
        string $repo,
    ): ReposGetTopReferrersResponse
    {
        // TODO: Implement ReposGetTopReferrers
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users
     *
     * Get users with access to the protected branch
     */
    public function reposGetUsersWithAccessToProtectedBranch(
        string $owner,
        string $repo,
        string $branch,
    ): ReposGetUsersWithAccessToProtectedBranchResponse
    {
        // TODO: Implement ReposGetUsersWithAccessToProtectedBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/traffic/views
     *
     * Get page views
     */
    public function reposGetViews(
        ReposGetViewsRequest $request,
        string $owner,
        string $repo,
    ): ReposGetViewsResponse
    {
        // TODO: Implement ReposGetViews
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/hooks/{hook_id}
     *
     * Get a repository webhook
     */
    public function reposGetWebhook(
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposGetWebhookResponse
    {
        // TODO: Implement ReposGetWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/hooks/{hook_id}/config
     *
     * Get a webhook configuration for a repository
     */
    public function reposGetWebhookConfigForRepo(
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposGetWebhookConfigForRepoResponse
    {
        // TODO: Implement ReposGetWebhookConfigForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}
     *
     * Get a delivery for a repository webhook
     */
    public function reposGetWebhookDelivery(
        string $owner,
        string $repo,
        int $hook_id,
        int $delivery_id,
    ): ReposGetWebhookDeliveryResponse
    {
        // TODO: Implement ReposGetWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/autolinks
     *
     * List all autolinks of a repository
     */
    public function reposListAutolinks(
        ReposListAutolinksRequest $request,
        string $owner,
        string $repo,
    ): ReposListAutolinksResponse
    {
        // TODO: Implement ReposListAutolinks
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/branches
     *
     * List branches
     */
    public function reposListBranches(
        ReposListBranchesRequest $request,
        string $owner,
        string $repo,
    ): ReposListBranchesResponse
    {
        // TODO: Implement ReposListBranches
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head
     *
     * List branches for HEAD commit
     */
    public function reposListBranchesForHeadCommit(
        string $owner,
        string $repo,
        string $commit_sha,
    ): ReposListBranchesForHeadCommitResponse
    {
        // TODO: Implement ReposListBranchesForHeadCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/collaborators
     *
     * List repository collaborators
     */
    public function reposListCollaborators(
        ReposListCollaboratorsRequest $request,
        string $owner,
        string $repo,
    ): ReposListCollaboratorsResponse
    {
        // TODO: Implement ReposListCollaborators
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{commit_sha}/comments
     *
     * List commit comments
     */
    public function reposListCommentsForCommit(
        ReposListCommentsForCommitRequest $request,
        string $owner,
        string $repo,
        string $commit_sha,
    ): ReposListCommentsForCommitResponse
    {
        // TODO: Implement ReposListCommentsForCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/comments
     *
     * List commit comments for a repository
     */
    public function reposListCommitCommentsForRepo(
        ReposListCommitCommentsForRepoRequest $request,
        string $owner,
        string $repo,
    ): ReposListCommitCommentsForRepoResponse
    {
        // TODO: Implement ReposListCommitCommentsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{ref}/statuses
     *
     * List commit statuses for a reference
     */
    public function reposListCommitStatusesForRef(
        ReposListCommitStatusesForRefRequest $request,
        string $owner,
        string $repo,
        string $ref,
    ): ReposListCommitStatusesForRefResponse
    {
        // TODO: Implement ReposListCommitStatusesForRef
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits
     *
     * List commits
     */
    public function reposListCommits(
        ReposListCommitsRequest $request,
        string $owner,
        string $repo,
    ): ReposListCommitsResponse
    {
        // TODO: Implement ReposListCommits
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/contributors
     *
     * List repository contributors
     */
    public function reposListContributors(
        ReposListContributorsRequest $request,
        string $owner,
        string $repo,
    ): ReposListContributorsResponse
    {
        // TODO: Implement ReposListContributors
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/keys
     *
     * List deploy keys
     */
    public function reposListDeployKeys(
        ReposListDeployKeysRequest $request,
        string $owner,
        string $repo,
    ): ReposListDeployKeysResponse
    {
        // TODO: Implement ReposListDeployKeys
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses
     *
     * List deployment statuses
     */
    public function reposListDeploymentStatuses(
        ReposListDeploymentStatusesRequest $request,
        string $owner,
        string $repo,
        int $deployment_id,
    ): ReposListDeploymentStatusesResponse
    {
        // TODO: Implement ReposListDeploymentStatuses
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/deployments
     *
     * List deployments
     */
    public function reposListDeployments(
        ReposListDeploymentsRequest $request,
        string $owner,
        string $repo,
    ): ReposListDeploymentsResponse
    {
        // TODO: Implement ReposListDeployments
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/forks
     *
     * List forks
     */
    public function reposListForks(
        ReposListForksRequest $request,
        string $owner,
        string $repo,
    ): ReposListForksResponse
    {
        // TODO: Implement ReposListForks
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/invitations
     *
     * List repository invitations
     */
    public function reposListInvitations(
        ReposListInvitationsRequest $request,
        string $owner,
        string $repo,
    ): ReposListInvitationsResponse
    {
        // TODO: Implement ReposListInvitations
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/languages
     *
     * List repository languages
     */
    public function reposListLanguages(
        string $owner,
        string $repo,
    ): ReposListLanguagesResponse
    {
        // TODO: Implement ReposListLanguages
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/pages/builds
     *
     * List GitHub Pages builds
     */
    public function reposListPagesBuilds(
        ReposListPagesBuildsRequest $request,
        string $owner,
        string $repo,
    ): ReposListPagesBuildsResponse
    {
        // TODO: Implement ReposListPagesBuilds
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls
     *
     * List pull requests associated with a commit
     */
    public function reposListPullRequestsAssociatedWithCommit(
        ReposListPullRequestsAssociatedWithCommitRequest $request,
        string $owner,
        string $repo,
        string $commit_sha,
    ): ReposListPullRequestsAssociatedWithCommitResponse
    {
        // TODO: Implement ReposListPullRequestsAssociatedWithCommit
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases/{release_id}/assets
     *
     * List release assets
     */
    public function reposListReleaseAssets(
        ReposListReleaseAssetsRequest $request,
        string $owner,
        string $repo,
        int $release_id,
    ): ReposListReleaseAssetsResponse
    {
        // TODO: Implement ReposListReleaseAssets
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/releases
     *
     * List releases
     */
    public function reposListReleases(
        ReposListReleasesRequest $request,
        string $owner,
        string $repo,
    ): ReposListReleasesResponse
    {
        // TODO: Implement ReposListReleases
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/tags
     *
     * List repository tags
     */
    public function reposListTags(
        ReposListTagsRequest $request,
        string $owner,
        string $repo,
    ): ReposListTagsResponse
    {
        // TODO: Implement ReposListTags
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/teams
     *
     * List repository teams
     */
    public function reposListTeams(
        ReposListTeamsRequest $request,
        string $owner,
        string $repo,
    ): ReposListTeamsResponse
    {
        // TODO: Implement ReposListTeams
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries
     *
     * List deliveries for a repository webhook
     */
    public function reposListWebhookDeliveries(
        ReposListWebhookDeliveriesRequest $request,
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposListWebhookDeliveriesResponse
    {
        // TODO: Implement ReposListWebhookDeliveries
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/hooks
     *
     * List repository webhooks
     */
    public function reposListWebhooks(
        ReposListWebhooksRequest $request,
        string $owner,
        string $repo,
    ): ReposListWebhooksResponse
    {
        // TODO: Implement ReposListWebhooks
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/merges
     *
     * Merge a branch
     */
    public function reposMerge(
        ReposMergeRequest $request,
        string $owner,
        string $repo,
    ): ReposMergeResponse
    {
        // TODO: Implement ReposMerge
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/merge-upstream
     *
     * Sync a fork branch with the upstream repository
     */
    public function reposMergeUpstream(
        ReposMergeUpstreamRequest $request,
        string $owner,
        string $repo,
    ): ReposMergeUpstreamResponse
    {
        // TODO: Implement ReposMergeUpstream
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/hooks/{hook_id}/pings
     *
     * Ping a repository webhook
     */
    public function reposPingWebhook(
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposPingWebhookResponse
    {
        // TODO: Implement ReposPingWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts
     *
     * Redeliver a delivery for a repository webhook
     */
    public function reposRedeliverWebhookDelivery(
        string $owner,
        string $repo,
        int $hook_id,
        int $delivery_id,
    ): ReposRedeliverWebhookDeliveryResponse
    {
        // TODO: Implement ReposRedeliverWebhookDelivery
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps
     *
     * Remove app access restrictions
     */
    public function reposRemoveAppAccessRestrictions(
        ReposRemoveAppAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposRemoveAppAccessRestrictionsResponse
    {
        // TODO: Implement ReposRemoveAppAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/collaborators/{username}
     *
     * Remove a repository collaborator
     */
    public function reposRemoveCollaborator(
        string $owner,
        string $repo,
        string $username,
    ): ReposRemoveCollaboratorResponse
    {
        // TODO: Implement ReposRemoveCollaborator
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts
     *
     * Remove status check contexts
     */
    public function reposRemoveStatusCheckContexts(
        ReposRemoveStatusCheckContextsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposRemoveStatusCheckContextsResponse
    {
        // TODO: Implement ReposRemoveStatusCheckContexts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks
     *
     * Remove status check protection
     */
    public function reposRemoveStatusCheckProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposRemoveStatusCheckProtectionResponse
    {
        // TODO: Implement ReposRemoveStatusCheckProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams
     *
     * Remove team access restrictions
     */
    public function reposRemoveTeamAccessRestrictions(
        ReposRemoveTeamAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposRemoveTeamAccessRestrictionsResponse
    {
        // TODO: Implement ReposRemoveTeamAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users
     *
     * Remove user access restrictions
     */
    public function reposRemoveUserAccessRestrictions(
        ReposRemoveUserAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposRemoveUserAccessRestrictionsResponse
    {
        // TODO: Implement ReposRemoveUserAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/rename
     *
     * Rename a branch
     */
    public function reposRenameBranch(
        ReposRenameBranchRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposRenameBranchResponse
    {
        // TODO: Implement ReposRenameBranch
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/topics
     *
     * Replace all repository topics
     */
    public function reposReplaceAllTopics(
        ReposReplaceAllTopicsRequest $request,
        string $owner,
        string $repo,
    ): ReposReplaceAllTopicsResponse
    {
        // TODO: Implement ReposReplaceAllTopics
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/pages/builds
     *
     * Request a GitHub Pages build
     */
    public function reposRequestPagesBuild(
        string $owner,
        string $repo,
    ): ReposRequestPagesBuildResponse
    {
        // TODO: Implement ReposRequestPagesBuild
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins
     *
     * Set admin branch protection
     */
    public function reposSetAdminBranchProtection(
        string $owner,
        string $repo,
        string $branch,
    ): ReposSetAdminBranchProtectionResponse
    {
        // TODO: Implement ReposSetAdminBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps
     *
     * Set app access restrictions
     */
    public function reposSetAppAccessRestrictions(
        ReposSetAppAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposSetAppAccessRestrictionsResponse
    {
        // TODO: Implement ReposSetAppAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts
     *
     * Set status check contexts
     */
    public function reposSetStatusCheckContexts(
        ReposSetStatusCheckContextsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposSetStatusCheckContextsResponse
    {
        // TODO: Implement ReposSetStatusCheckContexts
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams
     *
     * Set team access restrictions
     */
    public function reposSetTeamAccessRestrictions(
        ReposSetTeamAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposSetTeamAccessRestrictionsResponse
    {
        // TODO: Implement ReposSetTeamAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users
     *
     * Set user access restrictions
     */
    public function reposSetUserAccessRestrictions(
        ReposSetUserAccessRestrictionsRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposSetUserAccessRestrictionsResponse
    {
        // TODO: Implement ReposSetUserAccessRestrictions
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/hooks/{hook_id}/tests
     *
     * Test the push repository webhook
     */
    public function reposTestPushWebhook(
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposTestPushWebhookResponse
    {
        // TODO: Implement ReposTestPushWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/transfer
     *
     * Transfer a repository
     */
    public function reposTransfer(
        ReposTransferRequest $request,
        string $owner,
        string $repo,
    ): ReposTransferResponse
    {
        // TODO: Implement ReposTransfer
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}
     *
     * Update a repository
     */
    public function reposUpdate(
        ReposUpdateRequest $request,
        string $owner,
        string $repo,
    ): ReposUpdateResponse
    {
        // TODO: Implement ReposUpdate
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PUT /repos/{owner}/{repo}/branches/{branch}/protection
     *
     * Update branch protection
     */
    public function reposUpdateBranchProtection(
        ReposUpdateBranchProtectionRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposUpdateBranchProtectionResponse
    {
        // TODO: Implement ReposUpdateBranchProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/comments/{comment_id}
     *
     * Update a commit comment
     */
    public function reposUpdateCommitComment(
        ReposUpdateCommitCommentRequest $request,
        string $owner,
        string $repo,
        int $comment_id,
    ): ReposUpdateCommitCommentResponse
    {
        // TODO: Implement ReposUpdateCommitComment
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/invitations/{invitation_id}
     *
     * Update a repository invitation
     */
    public function reposUpdateInvitation(
        ReposUpdateInvitationRequest $request,
        string $owner,
        string $repo,
        int $invitation_id,
    ): ReposUpdateInvitationResponse
    {
        // TODO: Implement ReposUpdateInvitation
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews
     *
     * Update pull request review protection
     */
    public function reposUpdatePullRequestReviewProtection(
        ReposUpdatePullRequestReviewProtectionRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposUpdatePullRequestReviewProtectionResponse
    {
        // TODO: Implement ReposUpdatePullRequestReviewProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/releases/{release_id}
     *
     * Update a release
     */
    public function reposUpdateRelease(
        ReposUpdateReleaseRequest $request,
        string $owner,
        string $repo,
        int $release_id,
    ): ReposUpdateReleaseResponse
    {
        // TODO: Implement ReposUpdateRelease
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}
     *
     * Update a release asset
     */
    public function reposUpdateReleaseAsset(
        ReposUpdateReleaseAssetRequest $request,
        string $owner,
        string $repo,
        int $asset_id,
    ): ReposUpdateReleaseAssetResponse
    {
        // TODO: Implement ReposUpdateReleaseAsset
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks
     *
     * Update status check protection
     */
    public function reposUpdateStatusCheckProtection(
        ReposUpdateStatusCheckProtectionRequest $request,
        string $owner,
        string $repo,
        string $branch,
    ): ReposUpdateStatusCheckProtectionResponse
    {
        // TODO: Implement ReposUpdateStatusCheckProtection
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/hooks/{hook_id}
     *
     * Update a repository webhook
     */
    public function reposUpdateWebhook(
        ReposUpdateWebhookRequest $request,
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposUpdateWebhookResponse
    {
        // TODO: Implement ReposUpdateWebhook
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config
     *
     * Update a webhook configuration for a repository
     */
    public function reposUpdateWebhookConfigForRepo(
        ReposUpdateWebhookConfigForRepoRequest $request,
        string $owner,
        string $repo,
        int $hook_id,
    ): ReposUpdateWebhookConfigForRepoResponse
    {
        // TODO: Implement ReposUpdateWebhookConfigForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * POST /repos/{owner}/{repo}/releases/{release_id}/assets
     *
     * Upload a release asset
     */
    public function reposUploadReleaseAsset(
        ReposUploadReleaseAssetRequest $request,
        string $owner,
        string $repo,
        int $release_id,
    ): ReposUploadReleaseAssetResponse
    {
        // TODO: Implement ReposUploadReleaseAsset
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}
     *
     * Get a secret scanning alert
     */
    public function secretScanningGetAlert(
        string $owner,
        string $repo,
        int $alert_number,
    ): SecretScanningGetAlertResponse
    {
        // TODO: Implement SecretScanningGetAlert
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * GET /repos/{owner}/{repo}/secret-scanning/alerts
     *
     * List secret scanning alerts for a repository
     */
    public function secretScanningListAlertsForRepo(
        SecretScanningListAlertsForRepoRequest $request,
        string $owner,
        string $repo,
    ): SecretScanningListAlertsForRepoResponse
    {
        // TODO: Implement SecretScanningListAlertsForRepo
        throw new \BadMethodCallException('Not implemented');
    }

    /**
     * PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}
     *
     * Update a secret scanning alert
     */
    public function secretScanningUpdateAlert(
        SecretScanningUpdateAlertRequest $request,
        string $owner,
        string $repo,
        int $alert_number,
    ): SecretScanningUpdateAlertResponse
    {
        // TODO: Implement SecretScanningUpdateAlert
        throw new \BadMethodCallException('Not implemented');
    }
}
