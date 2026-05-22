<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Reports\CandidateFunctionAgreementDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\CodeInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EvaluationCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EvaluationDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EvaluationGraphSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EvaluationParticipationSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EvaluationShiftTableInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventCampCapitalSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventCampRealAllInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventCampRealInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventCampSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationExportExcelInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationExportInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationLetterAllAttachmentInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationLetterAllInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationLetterAllWithAttachmenZIPInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationLetterIssueAllInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\EventEducationLetterIssueAllZIPInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ExportPersonInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ExportUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\FunctionAgreementDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantAdvancePaymentListInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantHeadquartersBuildingInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantHeadquartersInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantHeadquartersUniversalInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantHeadquartersUnorganizedYouthInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantOverviewInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\GrantUnitSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\MemberCardDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\MemberCardThumbnailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ParticipantCampExcelInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ParticipantEducationExcelInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ParticipantEducationFeeExcelInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\QualificationAllNewSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\RegistryMinistryInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\ReportInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\StatementDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\UnitRegistrationPersonsInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\UserDetailTwoFactorInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\WarehouseItemBarcodeInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\WarehouseItemInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\WarehouseItemStockTakingDiscardedInput;
use Misakstvanu\LaravelSkautis\Requests\Reports\WarehouseItemStockTakingInput;
use Misakstvanu\LaravelSkautis\Responses\Reports\CandidateFunctionAgreementDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\CodeOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EvaluationCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EvaluationDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EvaluationGraphSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EvaluationParticipationSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EvaluationShiftTableOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventCampCapitalSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventCampRealAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventCampRealOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventCampSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationExportExcelOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationExportOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationLetterAllAttachmentOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationLetterAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationLetterAllWithAttachmenZIPOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationLetterIssueAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\EventEducationLetterIssueAllZIPOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ExportPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ExportUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\FunctionAgreementDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantAdvancePaymentListOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantHeadquartersBuildingOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantHeadquartersOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantHeadquartersUniversalOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantHeadquartersUnorganizedYouthOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantOverviewOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\GrantUnitSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\MemberCardDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\MemberCardThumbnailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ParticipantCampExcelOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ParticipantEducationExcelOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ParticipantEducationFeeExcelOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\QualificationAllNewSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\RegistryMinistryOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\ReportOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\StatementDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\UnitRegistrationPersonsOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\UserDetailTwoFactorOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\WarehouseItemBarcodeOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\WarehouseItemOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\WarehouseItemStockTakingDiscardedOutput;
use Misakstvanu\LaravelSkautis\Responses\Reports\WarehouseItemStockTakingOutput;

/**
 * Generovaní tiskových sestav
 */
final class ReportsService
{
    public const SERVICE_NAME = 'Reports';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Tisková sestava: Šablona souhlasu kandidáta sněmu se zápisem do spolkového rejstříku
     */
    public function CandidateFunctionAgreementDetail(CandidateFunctionAgreementDetailInput $input = new CandidateFunctionAgreementDetailInput()): CandidateFunctionAgreementDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CandidateFunctionAgreementDetail', OperationRequest::from($input->toArray()));
        return CandidateFunctionAgreementDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Kód
     */
    public function Code(CodeInput $input = new CodeInput()): CodeOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'Code', OperationRequest::from($input->toArray()));
        return CodeOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Srovnání výsledků kvality s ostatním
     */
    public function EvaluationCompare(EvaluationCompareInput $input = new EvaluationCompareInput()): EvaluationCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCompare', OperationRequest::from($input->toArray()));
        return EvaluationCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Hodnocení kvality
     */
    public function EvaluationDetail(EvaluationDetailInput $input = new EvaluationDetailInput()): EvaluationDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetail', OperationRequest::from($input->toArray()));
        return EvaluationDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Grafický pohled na hodnocení podřízených jednotek
     */
    public function EvaluationGraphSummary(EvaluationGraphSummaryInput $input = new EvaluationGraphSummaryInput()): EvaluationGraphSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationGraphSummary', OperationRequest::from($input->toArray()));
        return EvaluationGraphSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Grafický pohled na hodnocení podřízených jednotek
     */
    public function EvaluationParticipationSummary(EvaluationParticipationSummaryInput $input = new EvaluationParticipationSummaryInput()): EvaluationParticipationSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationParticipationSummary', OperationRequest::from($input->toArray()));
        return EvaluationParticipationSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Grafický pohled na hodnocení podřízených jednotek
     */
    public function EvaluationShiftTable(EvaluationShiftTableInput $input = new EvaluationShiftTableInput()): EvaluationShiftTableOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationShiftTable', OperationRequest::from($input->toArray()));
        return EvaluationShiftTableOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled hlášenek pro MHMP
     */
    public function EventCampCapitalSummary(EventCampCapitalSummaryInput $input = new EventCampCapitalSummaryInput()): EventCampCapitalSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventCampCapitalSummary', OperationRequest::from($input->toArray()));
        return EventCampCapitalSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled skutečnosti táborů
     */
    public function EventCampReal(EventCampRealInput $input = new EventCampRealInput()): EventCampRealOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventCampReal', OperationRequest::from($input->toArray()));
        return EventCampRealOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled skutečnosti jednotlivých táborů
     */
    public function EventCampRealAll(EventCampRealAllInput $input = new EventCampRealAllInput()): EventCampRealAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventCampRealAll', OperationRequest::from($input->toArray()));
        return EventCampRealAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled hlášenek
     */
    public function EventCampSummary(EventCampSummaryInput $input = new EventCampSummaryInput()): EventCampSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventCampSummary', OperationRequest::from($input->toArray()));
        return EventCampSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Vzdělávací akce export
     */
    public function EventEducationExport(EventEducationExportInput $input = new EventEducationExportInput()): EventEducationExportOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationExport', OperationRequest::from($input->toArray()));
        return EventEducationExportOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Vzdělávací akce export
     */
    public function EventEducationExportExcel(EventEducationExportExcelInput $input = new EventEducationExportExcelInput()): EventEducationExportExcelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationExportExcel', OperationRequest::from($input->toArray()));
        return EventEducationExportExcelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Dekrety a absolventské listy
     */
    public function EventEducationLetterAll(EventEducationLetterAllInput $input = new EventEducationLetterAllInput()): EventEducationLetterAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationLetterAll', OperationRequest::from($input->toArray()));
        return EventEducationLetterAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Příloha k vůdcovskému dekretu
     */
    public function EventEducationLetterAllAttachment(EventEducationLetterAllAttachmentInput $input = new EventEducationLetterAllAttachmentInput()): EventEducationLetterAllAttachmentOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationLetterAllAttachment', OperationRequest::from($input->toArray()));
        return EventEducationLetterAllAttachmentOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Dekrety a absolventské listy
     */
    public function EventEducationLetterAllWithAttachmenZIP(EventEducationLetterAllWithAttachmenZIPInput $input = new EventEducationLetterAllWithAttachmenZIPInput()): EventEducationLetterAllWithAttachmenZIPOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationLetterAllWithAttachmenZIP', OperationRequest::from($input->toArray()));
        return EventEducationLetterAllWithAttachmenZIPOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Ručně generované dekrety a absolventské listy
     */
    public function EventEducationLetterIssueAll(EventEducationLetterIssueAllInput $input = new EventEducationLetterIssueAllInput()): EventEducationLetterIssueAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationLetterIssueAll', OperationRequest::from($input->toArray()));
        return EventEducationLetterIssueAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Ručně generované dekrety
     */
    public function EventEducationLetterIssueAllZIP(EventEducationLetterIssueAllZIPInput $input = new EventEducationLetterIssueAllZIPInput()): EventEducationLetterIssueAllZIPOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EventEducationLetterIssueAllZIP', OperationRequest::from($input->toArray()));
        return EventEducationLetterIssueAllZIPOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Export osob
     */
    public function ExportPerson(ExportPersonInput $input = new ExportPersonInput()): ExportPersonOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPerson', OperationRequest::from($input->toArray()));
        return ExportPersonOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Export jednotek
     */
    public function ExportUnit(ExportUnitInput $input = new ExportUnitInput()): ExportUnitOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnit', OperationRequest::from($input->toArray()));
        return ExportUnitOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Šablona souhlasu se zápisem do spolkového rejstříku
     */
    public function FunctionAgreementDetail(FunctionAgreementDetailInput $input = new FunctionAgreementDetailInput()): FunctionAgreementDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FunctionAgreementDetail', OperationRequest::from($input->toArray()));
        return FunctionAgreementDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled plateb záloh žádostí o dotace
     */
    public function GrantAdvancePaymentList(GrantAdvancePaymentListInput $input = new GrantAdvancePaymentListInput()): GrantAdvancePaymentListOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantAdvancePaymentList', OperationRequest::from($input->toArray()));
        return GrantAdvancePaymentListOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled žádostí o dotaci pro OJ
     */
    public function GrantHeadquarters(GrantHeadquartersInput $input = new GrantHeadquartersInput()): GrantHeadquartersOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantHeadquarters', OperationRequest::from($input->toArray()));
        return GrantHeadquartersOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled žádostí o dotaci pro OJ
     */
    public function GrantHeadquartersBuilding(GrantHeadquartersBuildingInput $input = new GrantHeadquartersBuildingInput()): GrantHeadquartersBuildingOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantHeadquartersBuilding', OperationRequest::from($input->toArray()));
        return GrantHeadquartersBuildingOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled žádostí o dotaci pro OJ
     */
    public function GrantHeadquartersUniversal(GrantHeadquartersUniversalInput $input = new GrantHeadquartersUniversalInput()): GrantHeadquartersUniversalOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantHeadquartersUniversal', OperationRequest::from($input->toArray()));
        return GrantHeadquartersUniversalOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled žádostí o dotaci pro OJ
     */
    public function GrantHeadquartersUnorganizedYouth(GrantHeadquartersUnorganizedYouthInput $input = new GrantHeadquartersUnorganizedYouthInput()): GrantHeadquartersUnorganizedYouthOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantHeadquartersUnorganizedYouth', OperationRequest::from($input->toArray()));
        return GrantHeadquartersUnorganizedYouthOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled dotovaných vzdělávacích akcí
     */
    public function GrantOverview(GrantOverviewInput $input = new GrantOverviewInput()): GrantOverviewOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantOverview', OperationRequest::from($input->toArray()));
        return GrantOverviewOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled žádostí o dotaci pro OJ
     */
    public function GrantUnitSummary(GrantUnitSummaryInput $input = new GrantUnitSummaryInput()): GrantUnitSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GrantUnitSummary', OperationRequest::from($input->toArray()));
        return GrantUnitSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Členská karty
     */
    public function MemberCardDetail(MemberCardDetailInput $input = new MemberCardDetailInput()): MemberCardDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MemberCardDetail', OperationRequest::from($input->toArray()));
        return MemberCardDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Náhled členské karty
     */
    public function MemberCardThumbnail(MemberCardThumbnailInput $input = new MemberCardThumbnailInput()): MemberCardThumbnailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MemberCardThumbnail', OperationRequest::from($input->toArray()));
        return MemberCardThumbnailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled účastníků tábora
     */
    public function ParticipantCampExcel(ParticipantCampExcelInput $input = new ParticipantCampExcelInput()): ParticipantCampExcelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ParticipantCampExcel', OperationRequest::from($input->toArray()));
        return ParticipantCampExcelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled účastníků vzdělávací akce
     */
    public function ParticipantEducationExcel(ParticipantEducationExcelInput $input = new ParticipantEducationExcelInput()): ParticipantEducationExcelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ParticipantEducationExcel', OperationRequest::from($input->toArray()));
        return ParticipantEducationExcelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Přehled účastníků vzdělávací akce
     */
    public function ParticipantEducationFeeExcel(ParticipantEducationFeeExcelInput $input = new ParticipantEducationFeeExcelInput()): ParticipantEducationFeeExcelOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ParticipantEducationFeeExcel', OperationRequest::from($input->toArray()));
        return ParticipantEducationFeeExcelOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Přehled nových kvalifikací
     */
    public function QualificationAllNewSummary(QualificationAllNewSummaryInput $input = new QualificationAllNewSummaryInput()): QualificationAllNewSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'QualificationAllNewSummary', OperationRequest::from($input->toArray()));
        return QualificationAllNewSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Výpis z registru OJ
     */
    public function RegistryMinistry(RegistryMinistryInput $input = new RegistryMinistryInput()): RegistryMinistryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RegistryMinistry', OperationRequest::from($input->toArray()));
        return RegistryMinistryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Vygenerování tiskové sestavy
     */
    public function Report(ReportInput $input = new ReportInput()): ReportOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'Report', OperationRequest::from($input->toArray()));
        return ReportOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Hospodářský výkaz
     */
    public function StatementDetail(StatementDetailInput $input = new StatementDetailInput()): StatementDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StatementDetail', OperationRequest::from($input->toArray()));
        return StatementDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Registrované osoby
     */
    public function UnitRegistrationPersons(UnitRegistrationPersonsInput $input = new UnitRegistrationPersonsInput()): UnitRegistrationPersonsOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UnitRegistrationPersons', OperationRequest::from($input->toArray()));
        return UnitRegistrationPersonsOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Detail 2F pro uživatele
     */
    public function UserDetailTwoFactor(UserDetailTwoFactorInput $input = new UserDetailTwoFactorInput()): UserDetailTwoFactorOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserDetailTwoFactor', OperationRequest::from($input->toArray()));
        return UserDetailTwoFactorOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Hodnocení kvality
     */
    public function WarehouseItem(WarehouseItemInput $input = new WarehouseItemInput()): WarehouseItemOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItem', OperationRequest::from($input->toArray()));
        return WarehouseItemOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Čárový kód položky skladu
     */
    public function WarehouseItemBarcode(WarehouseItemBarcodeInput $input = new WarehouseItemBarcodeInput()): WarehouseItemBarcodeOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemBarcode', OperationRequest::from($input->toArray()));
        return WarehouseItemBarcodeOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Inventurní soupis
     */
    public function WarehouseItemStockTaking(WarehouseItemStockTakingInput $input = new WarehouseItemStockTakingInput()): WarehouseItemStockTakingOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemStockTaking', OperationRequest::from($input->toArray()));
        return WarehouseItemStockTakingOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Tisková sestava: Likvidační protokol
     */
    public function WarehouseItemStockTakingDiscarded(WarehouseItemStockTakingDiscardedInput $input = new WarehouseItemStockTakingDiscardedInput()): WarehouseItemStockTakingDiscardedOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemStockTakingDiscarded', OperationRequest::from($input->toArray()));
        return WarehouseItemStockTakingDiscardedOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

}
