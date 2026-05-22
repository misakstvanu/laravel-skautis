<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Grants\AdvancePeriodAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\AdvanceStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\AttachmentTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\DateTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\FinanceAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\FinanceDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\FinanceDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\FinanceInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\FinanceUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceAllPaymentsInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceTypeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceUpdatePaymentsInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceUsingAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceUsingAllYearInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAdvanceUsingInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllAccountInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllHeadquartersBuildingInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllHeadquartersInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllHeadquartersUniversalInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllHeadquartersUnorganizedYouthInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllMessageInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAllUnitSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountDefaultAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountDefaultDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountDeleteGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAmountUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentAllAttachmentTypeInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentDetailGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentUpdateGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantAttachmentUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantCostEvidenceAllGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantCostEvidenceDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantCostEvidenceDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantCostEvidenceInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantCostEvidenceUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionAllConfirmedInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionDetailReportInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDecisionUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailEventEducationInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailGrantStatementInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailParticipationOverviewInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailSimpleInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantDetailYearsInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantEventAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantEventDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantEventEducationReminderInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantEventInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantEventUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantGrantStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantGrantStateDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantGrantStateInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantInsertCreateRemainingInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantOtherAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantOtherDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantOtherDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantOtherInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantOtherUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectFixedQuestionAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectParticipationAllGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectParticipationAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectParticipationDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectParticipationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectParticipationUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectUniversalDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectUniversalDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectUniversalInsertGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectUniversalUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantProjectUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantRealtyCollectionAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantRealtyCollectionDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantRealtyCollectionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantRealtyCollectionUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantReportHadquartersBuildingInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantReportHadquartersUniversalInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantReportHeadquartersUnorganizedYouthInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantStateDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextCategoryAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextCategoryDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextUpdateChangeOrderInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextVariableAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantTypeTextVariableDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateAccountInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateAllGrantSummaryApproveInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateAllGrantSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateAmountInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateApplyCancelInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateApplyInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateApproveDecisionInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateApproveInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateBillConfirmCancelInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateBillConfirmInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateBillSubmitCancelInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateBillSubmitInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateCanceledInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateCloseInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateCommitteeNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateComplementInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateConfirmCancelInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateConfirmInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateDeniedInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateDisapproveInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateDocumentFinalBudgetInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateEvaluationInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateFinalStatementNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateHeadquartersNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateLeaderNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateOpenInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateProjectNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\GrantUpdateStatementNoteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\MessageDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\MessageInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\MessageUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\MessageUpdateSendInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ParticipantCourseTermAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ParticipantCourseTermUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ProjectQuestionAnswerAllGrantExportInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ProjectQuestionAnswerAllGrantInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ProjectQuestionRequirementAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\ProjectQuestionTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\StatementAllInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\StatementDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\StatementInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\StatementOtherSyncInput;
use Misakstvanu\LaravelSkautis\Requests\Grants\StatementUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\Grants\AdvancePeriodAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\AdvanceStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\AttachmentTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\DateTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\FinanceAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\FinanceDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\FinanceInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceAllPaymentsOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceTypeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceUsingAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceUsingAllYearOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAdvanceUsingInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllAccountOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllHeadquartersBuildingOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllHeadquartersOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllHeadquartersUniversalOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllHeadquartersUnorganizedYouthOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllMessageOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAllUnitSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAmountAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAmountDefaultAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAmountDefaultDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAmountDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAmountInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAttachmentAllAttachmentTypeOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAttachmentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAttachmentDetailGrantOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAttachmentDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantAttachmentInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantCostEvidenceAllGrantOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantCostEvidenceDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantCostEvidenceInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDecisionAllConfirmedOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDecisionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDecisionDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDecisionDetailReportOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDecisionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailEventEducationOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailGrantStatementOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailParticipationOverviewOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailSimpleOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantDetailYearsOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantEventAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantEventInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantGrantStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantGrantStateInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantInsertCreateRemainingOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantOtherAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantOtherDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantOtherInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectFixedQuestionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectParticipationAllGrantOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectParticipationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectParticipationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectUniversalDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantProjectUniversalInsertGrantOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantRealtyCollectionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantRealtyCollectionDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantRealtyCollectionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantRealtyCollectionUpdateOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantReportHadquartersBuildingOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantReportHadquartersUniversalOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantReportHeadquartersUnorganizedYouthOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantStateDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextCategoryAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextCategoryDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextVariableAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantTypeTextVariableDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateAmountOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateApplyCancelOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateApplyOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateApproveDecisionOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateApproveOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateCanceledOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateCloseOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateComplementOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateConfirmCancelOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateConfirmOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateDeniedOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateDisapproveOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateEvaluationOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\GrantUpdateOpenOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\MessageDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\MessageInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\ParticipantCourseTermAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\ProjectQuestionAnswerAllGrantExportOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\ProjectQuestionAnswerAllGrantOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\ProjectQuestionRequirementAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\ProjectQuestionTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\StatementAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Grants\StatementInsertOutput;

/**
 * Webová služba pro práci s dotacemi
 */
final class GrantsService
{
    public const SERVICE_NAME = 'Grants';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam období zálohy na dotaci
     * @return AdvancePeriodAllOutput[]
     */
    public function AdvancePeriodAll(AdvancePeriodAllInput $input = new AdvancePeriodAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AdvancePeriodAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): AdvancePeriodAllOutput => AdvancePeriodAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam stavů zálohy
     * @return AdvanceStateAllOutput[]
     */
    public function AdvanceStateAll(AdvanceStateAllInput $input = new AdvanceStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AdvanceStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): AdvanceStateAllOutput => AdvanceStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů přílohy
     * @return AttachmentTypeAllOutput[]
     */
    public function AttachmentTypeAll(AttachmentTypeAllInput $input = new AttachmentTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AttachmentTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): AttachmentTypeAllOutput => AttachmentTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů data
     * @return DateTypeAllOutput[]
     */
    public function DateTypeAll(DateTypeAllInput $input = new DateTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DateTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DateTypeAllOutput => DateTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam částek financování žádosti o dotaci
     * @return FinanceAllOutput[]
     */
    public function FinanceAll(FinanceAllInput $input = new FinanceAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FinanceAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): FinanceAllOutput => FinanceAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat částku financování žádosti o dotaci
     */
    public function FinanceDelete(FinanceDeleteInput $input = new FinanceDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FinanceDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail částky financování žádosti o dotaci
     */
    public function FinanceDetail(FinanceDetailInput $input = new FinanceDetailInput()): FinanceDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FinanceDetail', OperationRequest::from($input->toArray()));
        return FinanceDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit částku financování žádosti o dotaci
     */
    public function FinanceInsert(FinanceInsertInput $input = new FinanceInsertInput()): FinanceInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FinanceInsert', OperationRequest::from($input->toArray()));
        return FinanceInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit částku financování žádosti o dotaci
     */
    public function FinanceUpdate(FinanceUpdateInput $input = new FinanceUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FinanceUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam záloh na dotaci
     * @return GrantAdvanceAllOutput[]
     */
    public function GrantAdvanceAll(GrantAdvanceAllInput $input = new GrantAdvanceAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAdvanceAllOutput => GrantAdvanceAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam dotací a jejich záloh
     */
    public function GrantAdvanceAllPayments(GrantAdvanceAllPaymentsInput $input = new GrantAdvanceAllPaymentsInput()): GrantAdvanceAllPaymentsOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceAllPayments', OperationRequest::from($input->toArray()));
        return GrantAdvanceAllPaymentsOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat zálohu na dotaci
     */
    public function GrantAdvanceDelete(GrantAdvanceDeleteInput $input = new GrantAdvanceDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail zálohy na dotaci
     */
    public function GrantAdvanceDetail(GrantAdvanceDetailInput $input = new GrantAdvanceDetailInput()): GrantAdvanceDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceDetail', OperationRequest::from($input->toArray()));
        return GrantAdvanceDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit zálohu na dotaci
     */
    public function GrantAdvanceInsert(GrantAdvanceInsertInput $input = new GrantAdvanceInsertInput()): GrantAdvanceInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceInsert', OperationRequest::from($input->toArray()));
        return GrantAdvanceInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů zálohy
     * @return GrantAdvanceTypeAllOutput[]
     */
    public function GrantAdvanceTypeAll(GrantAdvanceTypeAllInput $input = new GrantAdvanceTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAdvanceTypeAllOutput => GrantAdvanceTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail typu zálohy
     */
    public function GrantAdvanceTypeDetail(GrantAdvanceTypeDetailInput $input = new GrantAdvanceTypeDetailInput()): GrantAdvanceTypeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceTypeDetail', OperationRequest::from($input->toArray()));
        return GrantAdvanceTypeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit zálohu na dotaci
     */
    public function GrantAdvanceUpdate(GrantAdvanceUpdateInput $input = new GrantAdvanceUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit zálohu na dotaci
     */
    public function GrantAdvanceUpdatePayments(GrantAdvanceUpdatePaymentsInput $input = new GrantAdvanceUpdatePaymentsInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceUpdatePayments', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam záloh na dotaci
     */
    public function GrantAdvanceUsingAll(GrantAdvanceUsingAllInput $input = new GrantAdvanceUsingAllInput()): GrantAdvanceUsingAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceUsingAll', OperationRequest::from($input->toArray()));
        return GrantAdvanceUsingAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam záloh na dotaci
     * @return GrantAdvanceUsingAllYearOutput[]
     */
    public function GrantAdvanceUsingAllYear(GrantAdvanceUsingAllYearInput $input = new GrantAdvanceUsingAllYearInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceUsingAllYear', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAdvanceUsingAllYearOutput => GrantAdvanceUsingAllYearOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit čerpání dotace
     */
    public function GrantAdvanceUsingInsert(GrantAdvanceUsingInsertInput $input = new GrantAdvanceUsingInsertInput()): GrantAdvanceUsingInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvanceUsingInsert', OperationRequest::from($input->toArray()));
        return GrantAdvanceUsingInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam žádostí o dotaci
     * @return GrantAllOutput[]
     */
    public function GrantAll(GrantAllInput $input = new GrantAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAllOutput => GrantAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Ústřední přehled vyúčtování žádostí o dotaci
     */
    public function GrantAllAccount(GrantAllAccountInput $input = new GrantAllAccountInput()): GrantAllAccountOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllAccount', OperationRequest::from($input->toArray()));
        return GrantAllAccountOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     * @return GrantAllHeadquartersOutput[]
     */
    public function GrantAllHeadquarters(GrantAllHeadquartersInput $input = new GrantAllHeadquartersInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllHeadquarters', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAllHeadquartersOutput => GrantAllHeadquartersOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     */
    public function GrantAllHeadquartersBuilding(GrantAllHeadquartersBuildingInput $input = new GrantAllHeadquartersBuildingInput()): GrantAllHeadquartersBuildingOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllHeadquartersBuilding', OperationRequest::from($input->toArray()));
        return GrantAllHeadquartersBuildingOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     */
    public function GrantAllHeadquartersUniversal(GrantAllHeadquartersUniversalInput $input = new GrantAllHeadquartersUniversalInput()): GrantAllHeadquartersUniversalOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllHeadquartersUniversal', OperationRequest::from($input->toArray()));
        return GrantAllHeadquartersUniversalOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     */
    public function GrantAllHeadquartersUnorganizedYouth(GrantAllHeadquartersUnorganizedYouthInput $input = new GrantAllHeadquartersUnorganizedYouthInput()): GrantAllHeadquartersUnorganizedYouthOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllHeadquartersUnorganizedYouth', OperationRequest::from($input->toArray()));
        return GrantAllHeadquartersUnorganizedYouthOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam žádostí o dotaci pro zprávu dotace
     * @return GrantAllMessageOutput[]
     */
    public function GrantAllMessage(GrantAllMessageInput $input = new GrantAllMessageInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllMessage', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAllMessageOutput => GrantAllMessageOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Přehled žádostí o dotaci
     */
    public function GrantAllSummary(GrantAllSummaryInput $input = new GrantAllSummaryInput()): GrantAllSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllSummary', OperationRequest::from($input->toArray()));
        return GrantAllSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Přehled žádostí o dotaci pro OJ
     * @return GrantAllUnitSummaryOutput[]
     */
    public function GrantAllUnitSummary(GrantAllUnitSummaryInput $input = new GrantAllUnitSummaryInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAllUnitSummary', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAllUnitSummaryOutput => GrantAllUnitSummaryOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam částek na osoboden
     * @return GrantAmountAllOutput[]
     */
    public function GrantAmountAll(GrantAmountAllInput $input = new GrantAmountAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAmountAllOutput => GrantAmountAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam přednastavených částky dotace
     * @return GrantAmountDefaultAllOutput[]
     */
    public function GrantAmountDefaultAll(GrantAmountDefaultAllInput $input = new GrantAmountDefaultAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountDefaultAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAmountDefaultAllOutput => GrantAmountDefaultAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail přednastavené částky dotace
     */
    public function GrantAmountDefaultDetail(GrantAmountDefaultDetailInput $input = new GrantAmountDefaultDetailInput()): GrantAmountDefaultDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountDefaultDetail', OperationRequest::from($input->toArray()));
        return GrantAmountDefaultDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat částku na osoboden
     */
    public function GrantAmountDelete(GrantAmountDeleteInput $input = new GrantAmountDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat částky na osoboden pro žádost o dotaci
     */
    public function GrantAmountDeleteGrant(GrantAmountDeleteGrantInput $input = new GrantAmountDeleteGrantInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountDeleteGrant', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail částky na osoboden
     */
    public function GrantAmountDetail(GrantAmountDetailInput $input = new GrantAmountDetailInput()): GrantAmountDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountDetail', OperationRequest::from($input->toArray()));
        return GrantAmountDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit částku na osoboden
     */
    public function GrantAmountInsert(GrantAmountInsertInput $input = new GrantAmountInsertInput()): GrantAmountInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountInsert', OperationRequest::from($input->toArray()));
        return GrantAmountInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit částku na osoboden
     */
    public function GrantAmountUpdate(GrantAmountUpdateInput $input = new GrantAmountUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAmountUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam příloh žádosti o dotaci
     * @return GrantAttachmentAllOutput[]
     */
    public function GrantAttachmentAll(GrantAttachmentAllInput $input = new GrantAttachmentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAttachmentAllOutput => GrantAttachmentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam příloh žádosti o dotaci
     * @return GrantAttachmentAllAttachmentTypeOutput[]
     */
    public function GrantAttachmentAllAttachmentType(GrantAttachmentAllAttachmentTypeInput $input = new GrantAttachmentAllAttachmentTypeInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentAllAttachmentType', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantAttachmentAllAttachmentTypeOutput => GrantAttachmentAllAttachmentTypeOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat přílohu žádosti o dotaci
     */
    public function GrantAttachmentDelete(GrantAttachmentDeleteInput $input = new GrantAttachmentDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail přílohy žádosti o dotaci
     */
    public function GrantAttachmentDetail(GrantAttachmentDetailInput $input = new GrantAttachmentDetailInput()): GrantAttachmentDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentDetail', OperationRequest::from($input->toArray()));
        return GrantAttachmentDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail přílohy žádosti o dotaci
     */
    public function GrantAttachmentDetailGrant(GrantAttachmentDetailGrantInput $input = new GrantAttachmentDetailGrantInput()): GrantAttachmentDetailGrantOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentDetailGrant', OperationRequest::from($input->toArray()));
        return GrantAttachmentDetailGrantOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit přílohu žádosti o dotaci
     */
    public function GrantAttachmentInsert(GrantAttachmentInsertInput $input = new GrantAttachmentInsertInput()): GrantAttachmentInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentInsert', OperationRequest::from($input->toArray()));
        return GrantAttachmentInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit přílohu žádosti o dotaci
     */
    public function GrantAttachmentUpdate(GrantAttachmentUpdateInput $input = new GrantAttachmentUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit přílohu žádosti o dotaci
     */
    public function GrantAttachmentUpdateGrant(GrantAttachmentUpdateGrantInput $input = new GrantAttachmentUpdateGrantInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAttachmentUpdateGrant', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam účetních dokladů
     * @return GrantCostEvidenceAllGrantOutput[]
     */
    public function GrantCostEvidenceAllGrant(GrantCostEvidenceAllGrantInput $input = new GrantCostEvidenceAllGrantInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantCostEvidenceAllGrant', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantCostEvidenceAllGrantOutput => GrantCostEvidenceAllGrantOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat účetní doklad
     */
    public function GrantCostEvidenceDelete(GrantCostEvidenceDeleteInput $input = new GrantCostEvidenceDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantCostEvidenceDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail účetního dokladu
     */
    public function GrantCostEvidenceDetail(GrantCostEvidenceDetailInput $input = new GrantCostEvidenceDetailInput()): GrantCostEvidenceDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantCostEvidenceDetail', OperationRequest::from($input->toArray()));
        return GrantCostEvidenceDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit účetní doklad
     */
    public function GrantCostEvidenceInsert(GrantCostEvidenceInsertInput $input = new GrantCostEvidenceInsertInput()): GrantCostEvidenceInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantCostEvidenceInsert', OperationRequest::from($input->toArray()));
        return GrantCostEvidenceInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit účetní doklad
     */
    public function GrantCostEvidenceUpdate(GrantCostEvidenceUpdateInput $input = new GrantCostEvidenceUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantCostEvidenceUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst všechna rozhodnutí o přidělení dotací
     * @return GrantDecisionAllOutput[]
     */
    public function GrantDecisionAll(GrantDecisionAllInput $input = new GrantDecisionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantDecisionAllOutput => GrantDecisionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst všechna potvrzená rozhodnutí o přidělení dotací
     * @return GrantDecisionAllConfirmedOutput[]
     */
    public function GrantDecisionAllConfirmed(GrantDecisionAllConfirmedInput $input = new GrantDecisionAllConfirmedInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionAllConfirmed', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantDecisionAllConfirmedOutput => GrantDecisionAllConfirmedOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat rozhodnutí o přidělení dotace
     */
    public function GrantDecisionDelete(GrantDecisionDeleteInput $input = new GrantDecisionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail rozhodnutí o přidělení dotace
     */
    public function GrantDecisionDetail(GrantDecisionDetailInput $input = new GrantDecisionDetailInput()): GrantDecisionDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionDetail', OperationRequest::from($input->toArray()));
        return GrantDecisionDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst data pro sestavu rozhodnutí o přidělení dotace
     */
    public function GrantDecisionDetailReport(GrantDecisionDetailReportInput $input = new GrantDecisionDetailReportInput()): GrantDecisionDetailReportOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionDetailReport', OperationRequest::from($input->toArray()));
        return GrantDecisionDetailReportOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit rozhodnutí o přidělení dotace
     */
    public function GrantDecisionInsert(GrantDecisionInsertInput $input = new GrantDecisionInsertInput()): GrantDecisionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionInsert', OperationRequest::from($input->toArray()));
        return GrantDecisionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit rozhodnutí o přidělení dotace
     */
    public function GrantDecisionUpdate(GrantDecisionUpdateInput $input = new GrantDecisionUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDecisionUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat žádost o dotaci
     */
    public function GrantDelete(GrantDeleteInput $input = new GrantDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail žádosti o dotaci
     */
    public function GrantDetail(GrantDetailInput $input = new GrantDetailInput()): GrantDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetail', OperationRequest::from($input->toArray()));
        return GrantDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail žádosti o dotaci
     */
    public function GrantDetailEventEducation(GrantDetailEventEducationInput $input = new GrantDetailEventEducationInput()): GrantDetailEventEducationOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetailEventEducation', OperationRequest::from($input->toArray()));
        return GrantDetailEventEducationOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail o dotaci a rozpočtu
     */
    public function GrantDetailGrantStatement(GrantDetailGrantStatementInput $input = new GrantDetailGrantStatementInput()): GrantDetailGrantStatementOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetailGrantStatement', OperationRequest::from($input->toArray()));
        return GrantDetailGrantStatementOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst částky a počty pro jednotlivé kurzy VzA žádající o dotaci
     * @return GrantDetailParticipationOverviewOutput[]
     */
    public function GrantDetailParticipationOverview(GrantDetailParticipationOverviewInput $input = new GrantDetailParticipationOverviewInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetailParticipationOverview', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantDetailParticipationOverviewOutput => GrantDetailParticipationOverviewOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst zjednodušený detail žádosti o dotaci
     */
    public function GrantDetailSimple(GrantDetailSimpleInput $input = new GrantDetailSimpleInput()): GrantDetailSimpleOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetailSimple', OperationRequest::from($input->toArray()));
        return GrantDetailSimpleOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst roky konání vzdělávací akce
     * @return GrantDetailYearsOutput[]
     */
    public function GrantDetailYears(GrantDetailYearsInput $input = new GrantDetailYearsInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantDetailYears', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantDetailYearsOutput => GrantDetailYearsOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam dílčích akcí pro neorg. mládež
     * @return GrantEventAllOutput[]
     */
    public function GrantEventAll(GrantEventAllInput $input = new GrantEventAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantEventAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantEventAllOutput => GrantEventAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat dílčí akci pro neorg. mládež
     */
    public function GrantEventDelete(GrantEventDeleteInput $input = new GrantEventDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantEventDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Zaslat upomínky pro potvrzení rozhodnutí
     */
    public function GrantEventEducationReminder(GrantEventEducationReminderInput $input = new GrantEventEducationReminderInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantEventEducationReminder', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit dílčí akci pro neorg. mládež
     */
    public function GrantEventInsert(GrantEventInsertInput $input = new GrantEventInsertInput()): GrantEventInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantEventInsert', OperationRequest::from($input->toArray()));
        return GrantEventInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit dílčí akci pro neorg. mládež
     */
    public function GrantEventUpdate(GrantEventUpdateInput $input = new GrantEventUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantEventUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam stavů žádosti o dotaci
     * @return GrantGrantStateAllOutput[]
     */
    public function GrantGrantStateAll(GrantGrantStateAllInput $input = new GrantGrantStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantGrantStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantGrantStateAllOutput => GrantGrantStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat stav žádosti o dotaci
     */
    public function GrantGrantStateDelete(GrantGrantStateDeleteInput $input = new GrantGrantStateDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantGrantStateDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit stav žádosti o dotaci
     */
    public function GrantGrantStateInsert(GrantGrantStateInsertInput $input = new GrantGrantStateInsertInput()): GrantGrantStateInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantGrantStateInsert', OperationRequest::from($input->toArray()));
        return GrantGrantStateInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit žádost o dotaci
     */
    public function GrantInsert(GrantInsertInput $input = new GrantInsertInput()): GrantInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantInsert', OperationRequest::from($input->toArray()));
        return GrantInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit žádost o dotaci
     */
    public function GrantInsertCreateRemaining(GrantInsertCreateRemainingInput $input = new GrantInsertCreateRemainingInput()): GrantInsertCreateRemainingOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantInsertCreateRemaining', OperationRequest::from($input->toArray()));
        return GrantInsertCreateRemainingOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam dalších údajů v žádosti o dotaci
     * @return GrantOtherAllOutput[]
     */
    public function GrantOtherAll(GrantOtherAllInput $input = new GrantOtherAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOtherAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantOtherAllOutput => GrantOtherAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat další údaje v žádosti o dotaci
     */
    public function GrantOtherDelete(GrantOtherDeleteInput $input = new GrantOtherDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOtherDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail dalších údajů v žádosti o dotaci
     */
    public function GrantOtherDetail(GrantOtherDetailInput $input = new GrantOtherDetailInput()): GrantOtherDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOtherDetail', OperationRequest::from($input->toArray()));
        return GrantOtherDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit další údaje v žádosti o dotaci
     */
    public function GrantOtherInsert(GrantOtherInsertInput $input = new GrantOtherInsertInput()): GrantOtherInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOtherInsert', OperationRequest::from($input->toArray()));
        return GrantOtherInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit další údaje v žádosti o dotaci
     */
    public function GrantOtherUpdate(GrantOtherUpdateInput $input = new GrantOtherUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOtherUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam projektů žádosti o dotaci
     * @return GrantProjectAllOutput[]
     */
    public function GrantProjectAll(GrantProjectAllInput $input = new GrantProjectAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantProjectAllOutput => GrantProjectAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat projekt žádosti o dotaci
     */
    public function GrantProjectDelete(GrantProjectDeleteInput $input = new GrantProjectDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail projektu žádosti o dotaci
     */
    public function GrantProjectDetail(GrantProjectDetailInput $input = new GrantProjectDetailInput()): GrantProjectDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectDetail', OperationRequest::from($input->toArray()));
        return GrantProjectDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam otázek projektu dotace
     * @return GrantProjectFixedQuestionAllOutput[]
     */
    public function GrantProjectFixedQuestionAll(GrantProjectFixedQuestionAllInput $input = new GrantProjectFixedQuestionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectFixedQuestionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantProjectFixedQuestionAllOutput => GrantProjectFixedQuestionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit projekt žádosti o dotaci
     */
    public function GrantProjectInsert(GrantProjectInsertInput $input = new GrantProjectInsertInput()): GrantProjectInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectInsert', OperationRequest::from($input->toArray()));
        return GrantProjectInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam účastí v projektu žádosti o dotaci
     * @return GrantProjectParticipationAllOutput[]
     */
    public function GrantProjectParticipationAll(GrantProjectParticipationAllInput $input = new GrantProjectParticipationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectParticipationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantProjectParticipationAllOutput => GrantProjectParticipationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam účastí v projektu žádosti o dotaci
     * @return GrantProjectParticipationAllGrantOutput[]
     */
    public function GrantProjectParticipationAllGrant(GrantProjectParticipationAllGrantInput $input = new GrantProjectParticipationAllGrantInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectParticipationAllGrant', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantProjectParticipationAllGrantOutput => GrantProjectParticipationAllGrantOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat účast v projektu žádosti o dotaci
     */
    public function GrantProjectParticipationDelete(GrantProjectParticipationDeleteInput $input = new GrantProjectParticipationDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectParticipationDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit účast v projektu žádosti o dotaci
     */
    public function GrantProjectParticipationInsert(GrantProjectParticipationInsertInput $input = new GrantProjectParticipationInsertInput()): GrantProjectParticipationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectParticipationInsert', OperationRequest::from($input->toArray()));
        return GrantProjectParticipationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit účast v projektu žádosti o dotaci
     */
    public function GrantProjectParticipationUpdate(GrantProjectParticipationUpdateInput $input = new GrantProjectParticipationUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectParticipationUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat projekt
     */
    public function GrantProjectUniversalDelete(GrantProjectUniversalDeleteInput $input = new GrantProjectUniversalDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectUniversalDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail projektu
     */
    public function GrantProjectUniversalDetail(GrantProjectUniversalDetailInput $input = new GrantProjectUniversalDetailInput()): GrantProjectUniversalDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectUniversalDetail', OperationRequest::from($input->toArray()));
        return GrantProjectUniversalDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit projekt
     */
    public function GrantProjectUniversalInsertGrant(GrantProjectUniversalInsertGrantInput $input = new GrantProjectUniversalInsertGrantInput()): GrantProjectUniversalInsertGrantOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectUniversalInsertGrant', OperationRequest::from($input->toArray()));
        return GrantProjectUniversalInsertGrantOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit projekt
     */
    public function GrantProjectUniversalUpdate(GrantProjectUniversalUpdateInput $input = new GrantProjectUniversalUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectUniversalUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit projekt žádosti o dotaci
     */
    public function GrantProjectUpdate(GrantProjectUpdateInput $input = new GrantProjectUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantProjectUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Grant Realty Collection All.
     */
    public function GrantRealtyCollectionAll(GrantRealtyCollectionAllInput $input = new GrantRealtyCollectionAllInput()): GrantRealtyCollectionAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantRealtyCollectionAll', OperationRequest::from($input->toArray()));
        return GrantRealtyCollectionAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Grant Realty Collection Detail.
     */
    public function GrantRealtyCollectionDetail(GrantRealtyCollectionDetailInput $input = new GrantRealtyCollectionDetailInput()): GrantRealtyCollectionDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantRealtyCollectionDetail', OperationRequest::from($input->toArray()));
        return GrantRealtyCollectionDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Grant Realty Collection Insert.
     */
    public function GrantRealtyCollectionInsert(GrantRealtyCollectionInsertInput $input = new GrantRealtyCollectionInsertInput()): GrantRealtyCollectionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantRealtyCollectionInsert', OperationRequest::from($input->toArray()));
        return GrantRealtyCollectionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit RealtyCollectionUpdate
     */
    public function GrantRealtyCollectionUpdate(GrantRealtyCollectionUpdateInput $input = new GrantRealtyCollectionUpdateInput()): GrantRealtyCollectionUpdateOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantRealtyCollectionUpdate', OperationRequest::from($input->toArray()));
        return GrantRealtyCollectionUpdateOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     * @return GrantReportHadquartersBuildingOutput[]
     */
    public function GrantReportHadquartersBuilding(GrantReportHadquartersBuildingInput $input = new GrantReportHadquartersBuildingInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantReportHadquartersBuilding', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantReportHadquartersBuildingOutput => GrantReportHadquartersBuildingOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     * @return GrantReportHadquartersUniversalOutput[]
     */
    public function GrantReportHadquartersUniversal(GrantReportHadquartersUniversalInput $input = new GrantReportHadquartersUniversalInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantReportHadquartersUniversal', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantReportHadquartersUniversalOutput => GrantReportHadquartersUniversalOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Ústřední přehled žádostí o dotaci
     * @return GrantReportHeadquartersUnorganizedYouthOutput[]
     */
    public function GrantReportHeadquartersUnorganizedYouth(GrantReportHeadquartersUnorganizedYouthInput $input = new GrantReportHeadquartersUnorganizedYouthInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantReportHeadquartersUnorganizedYouth', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantReportHeadquartersUnorganizedYouthOutput => GrantReportHeadquartersUnorganizedYouthOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam stavů žádosti o dotaci
     * @return GrantStateAllOutput[]
     */
    public function GrantStateAll(GrantStateAllInput $input = new GrantStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantStateAllOutput => GrantStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail stavu žádosti o dotaci
     */
    public function GrantStateDetail(GrantStateDetailInput $input = new GrantStateDetailInput()): GrantStateDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantStateDetail', OperationRequest::from($input->toArray()));
        return GrantStateDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů dotace
     * @return GrantTypeAllOutput[]
     */
    public function GrantTypeAll(GrantTypeAllInput $input = new GrantTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantTypeAllOutput => GrantTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail typu dotace
     */
    public function GrantTypeDetail(GrantTypeDetailInput $input = new GrantTypeDetailInput()): GrantTypeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeDetail', OperationRequest::from($input->toArray()));
        return GrantTypeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam doplňujících textů typu dotace
     * @return GrantTypeTextAllOutput[]
     */
    public function GrantTypeTextAll(GrantTypeTextAllInput $input = new GrantTypeTextAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantTypeTextAllOutput => GrantTypeTextAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kategorií doplňujícího textu
     * @return GrantTypeTextCategoryAllOutput[]
     */
    public function GrantTypeTextCategoryAll(GrantTypeTextCategoryAllInput $input = new GrantTypeTextCategoryAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextCategoryAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantTypeTextCategoryAllOutput => GrantTypeTextCategoryAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail kategorie doplňujícího textu
     */
    public function GrantTypeTextCategoryDetail(GrantTypeTextCategoryDetailInput $input = new GrantTypeTextCategoryDetailInput()): GrantTypeTextCategoryDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextCategoryDetail', OperationRequest::from($input->toArray()));
        return GrantTypeTextCategoryDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat doplňující text typu dotace
     */
    public function GrantTypeTextDelete(GrantTypeTextDeleteInput $input = new GrantTypeTextDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail doplňujícího textu typu dotace
     */
    public function GrantTypeTextDetail(GrantTypeTextDetailInput $input = new GrantTypeTextDetailInput()): GrantTypeTextDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextDetail', OperationRequest::from($input->toArray()));
        return GrantTypeTextDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit doplňující text typu dotace
     */
    public function GrantTypeTextInsert(GrantTypeTextInsertInput $input = new GrantTypeTextInsertInput()): GrantTypeTextInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextInsert', OperationRequest::from($input->toArray()));
        return GrantTypeTextInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit doplňující text typu dotace
     */
    public function GrantTypeTextUpdate(GrantTypeTextUpdateInput $input = new GrantTypeTextUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Změnit pořadí doplňujícího textu typu dotace
     */
    public function GrantTypeTextUpdateChangeOrder(GrantTypeTextUpdateChangeOrderInput $input = new GrantTypeTextUpdateChangeOrderInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextUpdateChangeOrder', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam proměnných doplňujícího textu dotace
     * @return GrantTypeTextVariableAllOutput[]
     */
    public function GrantTypeTextVariableAll(GrantTypeTextVariableAllInput $input = new GrantTypeTextVariableAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextVariableAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GrantTypeTextVariableAllOutput => GrantTypeTextVariableAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail proměnné doplňujícího textu dotace
     */
    public function GrantTypeTextVariableDetail(GrantTypeTextVariableDetailInput $input = new GrantTypeTextVariableDetailInput()): GrantTypeTextVariableDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantTypeTextVariableDetail', OperationRequest::from($input->toArray()));
        return GrantTypeTextVariableDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit žádost o dotaci
     */
    public function GrantUpdate(GrantUpdateInput $input = new GrantUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Aktualizace záznamu pro headquarters účetníctví
     */
    public function GrantUpdateAccount(GrantUpdateAccountInput $input = new GrantUpdateAccountInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateAccount', OperationRequest::from($input->toArray()));
    }

    /**
     * Odevzdat vyúčtování žádosti o dotaci
     */
    public function GrantUpdateAllGrantSummary(GrantUpdateAllGrantSummaryInput $input = new GrantUpdateAllGrantSummaryInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateAllGrantSummary', OperationRequest::from($input->toArray()));
    }

    /**
     * Schválit vyúčtování žádosti o dotaci
     */
    public function GrantUpdateAllGrantSummaryApprove(GrantUpdateAllGrantSummaryApproveInput $input = new GrantUpdateAllGrantSummaryApproveInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateAllGrantSummaryApprove', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit hodnotu celkové dotace žádosti o dotaci
     */
    public function GrantUpdateAmount(GrantUpdateAmountInput $input = new GrantUpdateAmountInput()): GrantUpdateAmountOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateAmount', OperationRequest::from($input->toArray()));
        return GrantUpdateAmountOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Odevzdat žádost o dotaci k posouzení
     */
    public function GrantUpdateApply(GrantUpdateApplyInput $input = new GrantUpdateApplyInput()): GrantUpdateApplyOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateApply', OperationRequest::from($input->toArray()));
        return GrantUpdateApplyOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Zrušit odevzdání žádosti o dotaci
     */
    public function GrantUpdateApplyCancel(GrantUpdateApplyCancelInput $input = new GrantUpdateApplyCancelInput()): GrantUpdateApplyCancelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateApplyCancel', OperationRequest::from($input->toArray()));
        return GrantUpdateApplyCancelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Schválit žádost o dotaci
     */
    public function GrantUpdateApprove(GrantUpdateApproveInput $input = new GrantUpdateApproveInput()): GrantUpdateApproveOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateApprove', OperationRequest::from($input->toArray()));
        return GrantUpdateApproveOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Potvrdit rozhodnutí o žádosti o dotaci
     */
    public function GrantUpdateApproveDecision(GrantUpdateApproveDecisionInput $input = new GrantUpdateApproveDecisionInput()): GrantUpdateApproveDecisionOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateApproveDecision', OperationRequest::from($input->toArray()));
        return GrantUpdateApproveDecisionOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Potvrdit vyúčtování žádosti o dotaci
     */
    public function GrantUpdateBillConfirm(GrantUpdateBillConfirmInput $input = new GrantUpdateBillConfirmInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateBillConfirm', OperationRequest::from($input->toArray()));
    }

    /**
     * Zrušit potvrzení vyúčtování žádosti o dotaci
     */
    public function GrantUpdateBillConfirmCancel(GrantUpdateBillConfirmCancelInput $input = new GrantUpdateBillConfirmCancelInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateBillConfirmCancel', OperationRequest::from($input->toArray()));
    }

    /**
     * Odevzdat vyúčtování žádosti o dotaci
     */
    public function GrantUpdateBillSubmit(GrantUpdateBillSubmitInput $input = new GrantUpdateBillSubmitInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateBillSubmit', OperationRequest::from($input->toArray()));
    }

    /**
     * Zrušit odevzdání vyúčtování žádosti o dotaci
     */
    public function GrantUpdateBillSubmitCancel(GrantUpdateBillSubmitCancelInput $input = new GrantUpdateBillSubmitCancelInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateBillSubmitCancel', OperationRequest::from($input->toArray()));
    }

    /**
     * Zrušit žádost o dotaci
     */
    public function GrantUpdateCanceled(GrantUpdateCanceledInput $input = new GrantUpdateCanceledInput()): GrantUpdateCanceledOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateCanceled', OperationRequest::from($input->toArray()));
        return GrantUpdateCanceledOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Uzavře žádost o dotaci
     */
    public function GrantUpdateClose(GrantUpdateCloseInput $input = new GrantUpdateCloseInput()): GrantUpdateCloseOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateClose', OperationRequest::from($input->toArray()));
        return GrantUpdateCloseOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Zadat vyjádření revizní komise
     */
    public function GrantUpdateCommitteeNote(GrantUpdateCommitteeNoteInput $input = new GrantUpdateCommitteeNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateCommitteeNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Žádost o doplnění žádosti o dotaci
     */
    public function GrantUpdateComplement(GrantUpdateComplementInput $input = new GrantUpdateComplementInput()): GrantUpdateComplementOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateComplement', OperationRequest::from($input->toArray()));
        return GrantUpdateComplementOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Potvrzení žádosti o dotaci vedoucím OJ
     */
    public function GrantUpdateConfirm(GrantUpdateConfirmInput $input = new GrantUpdateConfirmInput()): GrantUpdateConfirmOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateConfirm', OperationRequest::from($input->toArray()));
        return GrantUpdateConfirmOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Zrušení potvrzení žádosti o dotaci vedoucím OJ
     */
    public function GrantUpdateConfirmCancel(GrantUpdateConfirmCancelInput $input = new GrantUpdateConfirmCancelInput()): GrantUpdateConfirmCancelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateConfirmCancel', OperationRequest::from($input->toArray()));
        return GrantUpdateConfirmCancelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Odmítnout žádost o dotaci
     */
    public function GrantUpdateDenied(GrantUpdateDeniedInput $input = new GrantUpdateDeniedInput()): GrantUpdateDeniedOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateDenied', OperationRequest::from($input->toArray()));
        return GrantUpdateDeniedOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Odmítnout schválení žádosti o dotaci
     */
    public function GrantUpdateDisapprove(GrantUpdateDisapproveInput $input = new GrantUpdateDisapproveInput()): GrantUpdateDisapproveOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateDisapprove', OperationRequest::from($input->toArray()));
        return GrantUpdateDisapproveOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit dokument k závěrečnému rozpočtu
     */
    public function GrantUpdateDocumentFinalBudget(GrantUpdateDocumentFinalBudgetInput $input = new GrantUpdateDocumentFinalBudgetInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateDocumentFinalBudget', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit vyhodnocení projektu u žádosti o dotaci
     */
    public function GrantUpdateEvaluation(GrantUpdateEvaluationInput $input = new GrantUpdateEvaluationInput()): GrantUpdateEvaluationOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateEvaluation', OperationRequest::from($input->toArray()));
        return GrantUpdateEvaluationOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit poznámku k závěrečnému rozpočtu
     */
    public function GrantUpdateFinalStatementNote(GrantUpdateFinalStatementNoteInput $input = new GrantUpdateFinalStatementNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateFinalStatementNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Odevzdat vyúčtování žádosti o dotaci
     */
    public function GrantUpdateHeadquartersNote(GrantUpdateHeadquartersNoteInput $input = new GrantUpdateHeadquartersNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateHeadquartersNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Odevzdat vyúčtování žádosti o dotaci
     */
    public function GrantUpdateLeaderNote(GrantUpdateLeaderNoteInput $input = new GrantUpdateLeaderNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateLeaderNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Uzavře žádost o dotaci
     */
    public function GrantUpdateOpen(GrantUpdateOpenInput $input = new GrantUpdateOpenInput()): GrantUpdateOpenOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateOpen', OperationRequest::from($input->toArray()));
        return GrantUpdateOpenOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit poznámku projektu žádosti o dotaci
     */
    public function GrantUpdateProjectNote(GrantUpdateProjectNoteInput $input = new GrantUpdateProjectNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateProjectNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit poznámku k rozpočtu
     */
    public function GrantUpdateStatementNote(GrantUpdateStatementNoteInput $input = new GrantUpdateStatementNoteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUpdateStatementNote', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail zprávy dotace
     */
    public function MessageDetail(MessageDetailInput $input = new MessageDetailInput()): MessageDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageDetail', OperationRequest::from($input->toArray()));
        return MessageDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit zprávu dotace
     */
    public function MessageInsert(MessageInsertInput $input = new MessageInsertInput()): MessageInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageInsert', OperationRequest::from($input->toArray()));
        return MessageInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit zprávu dotace
     */
    public function MessageUpdate(MessageUpdateInput $input = new MessageUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat zprávu dotace
     */
    public function MessageUpdateSend(MessageUpdateSendInput $input = new MessageUpdateSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageUpdateSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam účastí na kurzu vzdělávací akce
     * @return ParticipantCourseTermAllOutput[]
     */
    public function ParticipantCourseTermAll(ParticipantCourseTermAllInput $input = new ParticipantCourseTermAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ParticipantCourseTermAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ParticipantCourseTermAllOutput => ParticipantCourseTermAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit ucast na kurzu
     */
    public function ParticipantCourseTermUpdate(ParticipantCourseTermUpdateInput $input = new ParticipantCourseTermUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ParticipantCourseTermUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam otázek projektu dotace
     * @return ProjectQuestionAnswerAllGrantOutput[]
     */
    public function ProjectQuestionAnswerAllGrant(ProjectQuestionAnswerAllGrantInput $input = new ProjectQuestionAnswerAllGrantInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ProjectQuestionAnswerAllGrant', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ProjectQuestionAnswerAllGrantOutput => ProjectQuestionAnswerAllGrantOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam otázek projektu dotace pro export
     * @return ProjectQuestionAnswerAllGrantExportOutput[]
     */
    public function ProjectQuestionAnswerAllGrantExport(ProjectQuestionAnswerAllGrantExportInput $input = new ProjectQuestionAnswerAllGrantExportInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ProjectQuestionAnswerAllGrantExport', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ProjectQuestionAnswerAllGrantExportOutput => ProjectQuestionAnswerAllGrantExportOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů otázky projektu dotace
     * @return ProjectQuestionRequirementAllOutput[]
     */
    public function ProjectQuestionRequirementAll(ProjectQuestionRequirementAllInput $input = new ProjectQuestionRequirementAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ProjectQuestionRequirementAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ProjectQuestionRequirementAllOutput => ProjectQuestionRequirementAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů odpovědi projektu dotace
     * @return ProjectQuestionTypeAllOutput[]
     */
    public function ProjectQuestionTypeAll(ProjectQuestionTypeAllInput $input = new ProjectQuestionTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ProjectQuestionTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ProjectQuestionTypeAllOutput => ProjectQuestionTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam položek rozpočtu
     * @return StatementAllOutput[]
     */
    public function StatementAll(StatementAllInput $input = new StatementAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StatementAllOutput => StatementAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat položku rozpočtu
     */
    public function StatementDelete(StatementDeleteInput $input = new StatementDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit položku rozpočtu
     */
    public function StatementInsert(StatementInsertInput $input = new StatementInsertInput()): StatementInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementInsert', OperationRequest::from($input->toArray()));
        return StatementInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Synchronizovat předpokládaný a finální rozpočet
     */
    public function StatementOtherSync(StatementOtherSyncInput $input = new StatementOtherSyncInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementOtherSync', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit položku rozpočtu
     */
    public function StatementUpdate(StatementUpdateInput $input = new StatementUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementUpdate', OperationRequest::from($input->toArray()));
    }

}
