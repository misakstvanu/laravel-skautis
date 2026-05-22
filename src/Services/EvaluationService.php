<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllChildInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllDegradationCountInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllEventInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllGraphParticipationYearCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllGraphRatingYearCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllGraphSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllImprovementCountInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllParentInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllParticipationCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllParticipationInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllPersonInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllSectionMedianInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllStabilityCountInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllTypeCountInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllYearCreateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAllYearInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAnswerAllEvaluationPersonInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAnswerAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAnswerAllResultInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationAnswerAllShiftInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaAllEvaluationInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationCriteriaUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailExportInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailGraphSectionWeightInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailGraphYearCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationDetailYearCompareInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationGraphInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationInsertEventInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationPersonAllEvaluationInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationPersonInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationPersonUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationRatingAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationRatingDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationRatingInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationRatingUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionAllEvaluationInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionDetailGraphCriteriaWeightInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSectionUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetAllEvaluationInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSetUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeAllTypeInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeUpdateOpenInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSubtypeUpdatePublishInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSummaryPublicInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationSummaryRegionInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationUpdateCloseInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationUpdateOpenInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationVersionAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationVersionInsertEvaluationSubtypeInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\EvaluationVersionUpdateCacheInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\RatingAllInput;
use Misakstvanu\LaravelSkautis\Requests\Evaluation\RatingUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllChildOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllDegradationCountOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllEventOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllGraphParticipationYearCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllGraphRatingYearCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllGraphSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllImprovementCountOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllParentOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllParticipationCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllParticipationOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllSectionMedianOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllStabilityCountOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllTypeCountOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllYearCreateOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAllYearOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAnswerAllEvaluationPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAnswerAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAnswerAllResultOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationAnswerAllShiftOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationCriteriaAllEvaluationOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationCriteriaAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationCriteriaDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationCriteriaInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailExportOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailGraphSectionWeightOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailGraphYearCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationDetailYearCompareOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationGraphOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationInsertEventOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationPersonAllEvaluationOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationPersonInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationRatingAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationRatingInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSectionAllEvaluationOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSectionDetailGraphCriteriaWeightOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSectionDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSectionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSetAllEvaluationOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSetAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSetDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSetInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSubtypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSubtypeAllTypeOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSubtypeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSubtypeInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSummaryPublicOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationSummaryRegionOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\EvaluationVersionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Evaluation\RatingAllOutput;

/**
 * Webová služba pro práci s hodnocením kvality
 */
final class EvaluationService
{
    public const SERVICE_NAME = 'Evaluation';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam hodnocení kvality
     * @return EvaluationAllOutput[]
     */
    public function EvaluationAll(EvaluationAllInput $input = new EvaluationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllOutput => EvaluationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam hodnocení kvality akcí
     * @return EvaluationAllChildOutput[]
     */
    public function EvaluationAllChild(EvaluationAllChildInput $input = new EvaluationAllChildInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllChild', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllChildOutput => EvaluationAllChildOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst srovnání s ostatními
     */
    public function EvaluationAllCompare(EvaluationAllCompareInput $input = new EvaluationAllCompareInput()): EvaluationAllCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllCompare', OperationRequest::from($input->toArray()));
        return EvaluationAllCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst počty hodnocení po jednotlivých úrovních
     * @return EvaluationAllDegradationCountOutput[]
     */
    public function EvaluationAllDegradationCount(EvaluationAllDegradationCountInput $input = new EvaluationAllDegradationCountInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllDegradationCount', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllDegradationCountOutput => EvaluationAllDegradationCountOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam hodnocení kvality akcí
     * @return EvaluationAllEventOutput[]
     */
    public function EvaluationAllEvent(EvaluationAllEventInput $input = new EvaluationAllEventInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllEvent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllEventOutput => EvaluationAllEventOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Grafický pohled - počty hodnocení dané úrovně za posledních 10 let
     */
    public function EvaluationAllGraphParticipationYearCompare(EvaluationAllGraphParticipationYearCompareInput $input = new EvaluationAllGraphParticipationYearCompareInput()): EvaluationAllGraphParticipationYearCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllGraphParticipationYearCompare', OperationRequest::from($input->toArray()));
        return EvaluationAllGraphParticipationYearCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Grafický pohled - počty hodnocení dané úrovně dle výsledků za posledních 10 let
     */
    public function EvaluationAllGraphRatingYearCompare(EvaluationAllGraphRatingYearCompareInput $input = new EvaluationAllGraphRatingYearCompareInput()): EvaluationAllGraphRatingYearCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllGraphRatingYearCompare', OperationRequest::from($input->toArray()));
        return EvaluationAllGraphRatingYearCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Grafický pohled na hodnocení podřízených jednotek - Valašský frgál
     */
    public function EvaluationAllGraphSummary(EvaluationAllGraphSummaryInput $input = new EvaluationAllGraphSummaryInput()): EvaluationAllGraphSummaryOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllGraphSummary', OperationRequest::from($input->toArray()));
        return EvaluationAllGraphSummaryOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst počty hodnocení po jednotlivých úrovních
     * @return EvaluationAllImprovementCountOutput[]
     */
    public function EvaluationAllImprovementCount(EvaluationAllImprovementCountInput $input = new EvaluationAllImprovementCountInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllImprovementCount', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllImprovementCountOutput => EvaluationAllImprovementCountOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam hodnocení kvality akcí
     * @return EvaluationAllParentOutput[]
     */
    public function EvaluationAllParent(EvaluationAllParentInput $input = new EvaluationAllParentInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllParent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllParentOutput => EvaluationAllParentOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst účást HK podřízených jednotek
     * @return EvaluationAllParticipationOutput[]
     */
    public function EvaluationAllParticipation(EvaluationAllParticipationInput $input = new EvaluationAllParticipationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllParticipation', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllParticipationOutput => EvaluationAllParticipationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst účást HK podřízených jednotek
     * @return EvaluationAllParticipationCompareOutput[]
     */
    public function EvaluationAllParticipationCompare(EvaluationAllParticipationCompareInput $input = new EvaluationAllParticipationCompareInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllParticipationCompare', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllParticipationCompareOutput => EvaluationAllParticipationCompareOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam hodnocení kvality akcí
     * @return EvaluationAllPersonOutput[]
     */
    public function EvaluationAllPerson(EvaluationAllPersonInput $input = new EvaluationAllPersonInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllPerson', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllPersonOutput => EvaluationAllPersonOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst počty stabilních hodnocení po jednotlivých úrovních
     * @return EvaluationAllSectionMedianOutput[]
     */
    public function EvaluationAllSectionMedian(EvaluationAllSectionMedianInput $input = new EvaluationAllSectionMedianInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllSectionMedian', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllSectionMedianOutput => EvaluationAllSectionMedianOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst počty stabilních hodnocení po jednotlivých úrovních
     * @return EvaluationAllStabilityCountOutput[]
     */
    public function EvaluationAllStabilityCount(EvaluationAllStabilityCountInput $input = new EvaluationAllStabilityCountInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllStabilityCount', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllStabilityCountOutput => EvaluationAllStabilityCountOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst počty hodnocení po jednotlivých úrovních
     * @return EvaluationAllTypeCountOutput[]
     */
    public function EvaluationAllTypeCount(EvaluationAllTypeCountInput $input = new EvaluationAllTypeCountInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllTypeCount', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllTypeCountOutput => EvaluationAllTypeCountOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam hodnocení kvality jednoty
     * @return EvaluationAllUnitOutput[]
     */
    public function EvaluationAllUnit(EvaluationAllUnitInput $input = new EvaluationAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllUnitOutput => EvaluationAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Seznam let, ve kterých jsou hodnocení kvality k dispozici
     * @return EvaluationAllYearOutput[]
     */
    public function EvaluationAllYear(EvaluationAllYearInput $input = new EvaluationAllYearInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllYear', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllYearOutput => EvaluationAllYearOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Seznam let, ve kterých je mozne zalozit hodnocení kvality
     * @return EvaluationAllYearCreateOutput[]
     */
    public function EvaluationAllYearCreate(EvaluationAllYearCreateInput $input = new EvaluationAllYearCreateInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAllYearCreate', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAllYearCreateOutput => EvaluationAllYearCreateOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam odpovědí hodnocení kvality
     * @return EvaluationAnswerAllOutput[]
     */
    public function EvaluationAnswerAll(EvaluationAnswerAllInput $input = new EvaluationAnswerAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAnswerAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAnswerAllOutput => EvaluationAnswerAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam odpovědí individuálního hodnocení kvality
     */
    public function EvaluationAnswerAllEvaluationPerson(EvaluationAnswerAllEvaluationPersonInput $input = new EvaluationAnswerAllEvaluationPersonInput()): EvaluationAnswerAllEvaluationPersonOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAnswerAllEvaluationPerson', OperationRequest::from($input->toArray()));
        return EvaluationAnswerAllEvaluationPersonOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Detailní výsledek hodnocení kvality
     */
    public function EvaluationAnswerAllResult(EvaluationAnswerAllResultInput $input = new EvaluationAnswerAllResultInput()): EvaluationAnswerAllResultOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAnswerAllResult', OperationRequest::from($input->toArray()));
        return EvaluationAnswerAllResultOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam akcí posunů
     * @return EvaluationAnswerAllShiftOutput[]
     */
    public function EvaluationAnswerAllShift(EvaluationAnswerAllShiftInput $input = new EvaluationAnswerAllShiftInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationAnswerAllShift', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationAnswerAllShiftOutput => EvaluationAnswerAllShiftOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kritérií hodnocení
     * @return EvaluationCriteriaAllOutput[]
     */
    public function EvaluationCriteriaAll(EvaluationCriteriaAllInput $input = new EvaluationCriteriaAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationCriteriaAllOutput => EvaluationCriteriaAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kritérii pro oblast hodnocní
     * @return EvaluationCriteriaAllEvaluationOutput[]
     */
    public function EvaluationCriteriaAllEvaluation(EvaluationCriteriaAllEvaluationInput $input = new EvaluationCriteriaAllEvaluationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaAllEvaluation', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationCriteriaAllEvaluationOutput => EvaluationCriteriaAllEvaluationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat kritérium hodnocení
     */
    public function EvaluationCriteriaDelete(EvaluationCriteriaDeleteInput $input = new EvaluationCriteriaDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail kritéria hodnocení
     */
    public function EvaluationCriteriaDetail(EvaluationCriteriaDetailInput $input = new EvaluationCriteriaDetailInput()): EvaluationCriteriaDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaDetail', OperationRequest::from($input->toArray()));
        return EvaluationCriteriaDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit kritérium hodnocení
     */
    public function EvaluationCriteriaInsert(EvaluationCriteriaInsertInput $input = new EvaluationCriteriaInsertInput()): EvaluationCriteriaInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaInsert', OperationRequest::from($input->toArray()));
        return EvaluationCriteriaInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit kritérium hodnocení
     */
    public function EvaluationCriteriaUpdate(EvaluationCriteriaUpdateInput $input = new EvaluationCriteriaUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationCriteriaUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail hodnocení kvality
     */
    public function EvaluationDetail(EvaluationDetailInput $input = new EvaluationDetailInput()): EvaluationDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetail', OperationRequest::from($input->toArray()));
        return EvaluationDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst srovnání s ostatními
     */
    public function EvaluationDetailCompare(EvaluationDetailCompareInput $input = new EvaluationDetailCompareInput()): EvaluationDetailCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetailCompare', OperationRequest::from($input->toArray()));
        return EvaluationDetailCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Stáhnout všechny exporty hodnocení kvality
     */
    public function EvaluationDetailExport(EvaluationDetailExportInput $input = new EvaluationDetailExportInput()): EvaluationDetailExportOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetailExport', OperationRequest::from($input->toArray()));
        return EvaluationDetailExportOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst graf vah oblastí daného hodnocení
     */
    public function EvaluationDetailGraphSectionWeight(EvaluationDetailGraphSectionWeightInput $input = new EvaluationDetailGraphSectionWeightInput()): EvaluationDetailGraphSectionWeightOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetailGraphSectionWeight', OperationRequest::from($input->toArray()));
        return EvaluationDetailGraphSectionWeightOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst graf meziroční srovnání
     */
    public function EvaluationDetailGraphYearCompare(EvaluationDetailGraphYearCompareInput $input = new EvaluationDetailGraphYearCompareInput()): EvaluationDetailGraphYearCompareOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetailGraphYearCompare', OperationRequest::from($input->toArray()));
        return EvaluationDetailGraphYearCompareOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst meziroční srovnání
     * @return EvaluationDetailYearCompareOutput[]
     */
    public function EvaluationDetailYearCompare(EvaluationDetailYearCompareInput $input = new EvaluationDetailYearCompareInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationDetailYearCompare', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationDetailYearCompareOutput => EvaluationDetailYearCompareOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Grafický pohled na hodnocení - Valašský frgál
     */
    public function EvaluationGraph(EvaluationGraphInput $input = new EvaluationGraphInput()): EvaluationGraphOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationGraph', OperationRequest::from($input->toArray()));
        return EvaluationGraphOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit hodnocení kvality
     */
    public function EvaluationInsert(EvaluationInsertInput $input = new EvaluationInsertInput()): EvaluationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationInsert', OperationRequest::from($input->toArray()));
        return EvaluationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit hodnocení kvality akce
     */
    public function EvaluationInsertEvent(EvaluationInsertEventInput $input = new EvaluationInsertEventInput()): EvaluationInsertEventOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationInsertEvent', OperationRequest::from($input->toArray()));
        return EvaluationInsertEventOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam individuálních hodnocení k základnímu hodnocení
     * @return EvaluationPersonAllEvaluationOutput[]
     */
    public function EvaluationPersonAllEvaluation(EvaluationPersonAllEvaluationInput $input = new EvaluationPersonAllEvaluationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationPersonAllEvaluation', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationPersonAllEvaluationOutput => EvaluationPersonAllEvaluationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit individuální hodnocení
     */
    public function EvaluationPersonInsert(EvaluationPersonInsertInput $input = new EvaluationPersonInsertInput()): EvaluationPersonInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationPersonInsert', OperationRequest::from($input->toArray()));
        return EvaluationPersonInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit individuální hodnocení kvality
     */
    public function EvaluationPersonUpdate(EvaluationPersonUpdateInput $input = new EvaluationPersonUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationPersonUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam celkových číselných hodnocení
     * @return EvaluationRatingAllOutput[]
     */
    public function EvaluationRatingAll(EvaluationRatingAllInput $input = new EvaluationRatingAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationRatingAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationRatingAllOutput => EvaluationRatingAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat celkové číselné hodnocení
     */
    public function EvaluationRatingDelete(EvaluationRatingDeleteInput $input = new EvaluationRatingDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationRatingDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit celkové číselné hodnocení
     */
    public function EvaluationRatingInsert(EvaluationRatingInsertInput $input = new EvaluationRatingInsertInput()): EvaluationRatingInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationRatingInsert', OperationRequest::from($input->toArray()));
        return EvaluationRatingInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit celkové ?íselné hodnocení
     */
    public function EvaluationRatingUpdate(EvaluationRatingUpdateInput $input = new EvaluationRatingUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationRatingUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst číselný přehled hodnocení
     * @return EvaluationSectionAllEvaluationOutput[]
     */
    public function EvaluationSectionAllEvaluation(EvaluationSectionAllEvaluationInput $input = new EvaluationSectionAllEvaluationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionAllEvaluation', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSectionAllEvaluationOutput => EvaluationSectionAllEvaluationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat oblast kvality
     */
    public function EvaluationSectionDelete(EvaluationSectionDeleteInput $input = new EvaluationSectionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail oblasti kvality
     */
    public function EvaluationSectionDetail(EvaluationSectionDetailInput $input = new EvaluationSectionDetailInput()): EvaluationSectionDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionDetail', OperationRequest::from($input->toArray()));
        return EvaluationSectionDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst graf s váhami bodů vize dané oblasti
     */
    public function EvaluationSectionDetailGraphCriteriaWeight(EvaluationSectionDetailGraphCriteriaWeightInput $input = new EvaluationSectionDetailGraphCriteriaWeightInput()): EvaluationSectionDetailGraphCriteriaWeightOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionDetailGraphCriteriaWeight', OperationRequest::from($input->toArray()));
        return EvaluationSectionDetailGraphCriteriaWeightOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit oblast kvality
     */
    public function EvaluationSectionInsert(EvaluationSectionInsertInput $input = new EvaluationSectionInsertInput()): EvaluationSectionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionInsert', OperationRequest::from($input->toArray()));
        return EvaluationSectionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit oblast kvality
     */
    public function EvaluationSectionUpdate(EvaluationSectionUpdateInput $input = new EvaluationSectionUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSectionUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam skupin kritérií
     * @return EvaluationSetAllOutput[]
     */
    public function EvaluationSetAll(EvaluationSetAllInput $input = new EvaluationSetAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSetAllOutput => EvaluationSetAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst číselný přehled hodnocení
     * @return EvaluationSetAllEvaluationOutput[]
     */
    public function EvaluationSetAllEvaluation(EvaluationSetAllEvaluationInput $input = new EvaluationSetAllEvaluationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetAllEvaluation', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSetAllEvaluationOutput => EvaluationSetAllEvaluationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat skupinu kritérií
     */
    public function EvaluationSetDelete(EvaluationSetDeleteInput $input = new EvaluationSetDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail bodu vize
     */
    public function EvaluationSetDetail(EvaluationSetDetailInput $input = new EvaluationSetDetailInput()): EvaluationSetDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetDetail', OperationRequest::from($input->toArray()));
        return EvaluationSetDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit skupinu kritérií
     */
    public function EvaluationSetInsert(EvaluationSetInsertInput $input = new EvaluationSetInsertInput()): EvaluationSetInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetInsert', OperationRequest::from($input->toArray()));
        return EvaluationSetInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit skupinu kritérií
     */
    public function EvaluationSetUpdate(EvaluationSetUpdateInput $input = new EvaluationSetUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSetUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam stavů hodnocení kvality
     * @return EvaluationStateAllOutput[]
     */
    public function EvaluationStateAll(EvaluationStateAllInput $input = new EvaluationStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationStateAllOutput => EvaluationStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů hodnocení kvality
     * @return EvaluationSubtypeAllOutput[]
     */
    public function EvaluationSubtypeAll(EvaluationSubtypeAllInput $input = new EvaluationSubtypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSubtypeAllOutput => EvaluationSubtypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam základních typů hodnocení kvality
     * @return EvaluationSubtypeAllTypeOutput[]
     */
    public function EvaluationSubtypeAllType(EvaluationSubtypeAllTypeInput $input = new EvaluationSubtypeAllTypeInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeAllType', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSubtypeAllTypeOutput => EvaluationSubtypeAllTypeOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat typ hodnocení kvality
     */
    public function EvaluationSubtypeDelete(EvaluationSubtypeDeleteInput $input = new EvaluationSubtypeDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail typu hodnocení kvality
     */
    public function EvaluationSubtypeDetail(EvaluationSubtypeDetailInput $input = new EvaluationSubtypeDetailInput()): EvaluationSubtypeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeDetail', OperationRequest::from($input->toArray()));
        return EvaluationSubtypeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit typ hodnocení kvality
     */
    public function EvaluationSubtypeInsert(EvaluationSubtypeInsertInput $input = new EvaluationSubtypeInsertInput()): EvaluationSubtypeInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeInsert', OperationRequest::from($input->toArray()));
        return EvaluationSubtypeInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit typ hodnocení kvality
     */
    public function EvaluationSubtypeUpdate(EvaluationSubtypeUpdateInput $input = new EvaluationSubtypeUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Otevřít publikovanou verzi typu pro úpravy
     */
    public function EvaluationSubtypeUpdateOpen(EvaluationSubtypeUpdateOpenInput $input = new EvaluationSubtypeUpdateOpenInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeUpdateOpen', OperationRequest::from($input->toArray()));
    }

    /**
     * Publikovat rozpracovanou verzi typu
     */
    public function EvaluationSubtypeUpdatePublish(EvaluationSubtypeUpdatePublishInput $input = new EvaluationSubtypeUpdatePublishInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSubtypeUpdatePublish', OperationRequest::from($input->toArray()));
    }

    /**
     * Věřejná sumarizovaná data hodnocení kvality
     */
    public function EvaluationSummaryPublic(EvaluationSummaryPublicInput $input = new EvaluationSummaryPublicInput()): EvaluationSummaryPublicOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSummaryPublic', OperationRequest::from($input->toArray()));
        return EvaluationSummaryPublicOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Výsledky hodnocení kvality pohled na regiony
     * @return EvaluationSummaryRegionOutput[]
     */
    public function EvaluationSummaryRegion(EvaluationSummaryRegionInput $input = new EvaluationSummaryRegionInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationSummaryRegion', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationSummaryRegionOutput => EvaluationSummaryRegionOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit hodnocení kvality
     */
    public function EvaluationUpdate(EvaluationUpdateInput $input = new EvaluationUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Uzavřít hodnocení
     */
    public function EvaluationUpdateClose(EvaluationUpdateCloseInput $input = new EvaluationUpdateCloseInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationUpdateClose', OperationRequest::from($input->toArray()));
    }

    /**
     * Otevřít hodnocení
     */
    public function EvaluationUpdateOpen(EvaluationUpdateOpenInput $input = new EvaluationUpdateOpenInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationUpdateOpen', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam verzí typu hodnocení kvality
     * @return EvaluationVersionAllOutput[]
     */
    public function EvaluationVersionAll(EvaluationVersionAllInput $input = new EvaluationVersionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationVersionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EvaluationVersionAllOutput => EvaluationVersionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Otevřít publikovanou verzi typu pro úpravy
     */
    public function EvaluationVersionInsertEvaluationSubtype(EvaluationVersionInsertEvaluationSubtypeInput $input = new EvaluationVersionInsertEvaluationSubtypeInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationVersionInsertEvaluationSubtype', OperationRequest::from($input->toArray()));
    }

    /**
     * Přepočítat výsledky hodnocení kvality
     */
    public function EvaluationVersionUpdateCache(EvaluationVersionUpdateCacheInput $input = new EvaluationVersionUpdateCacheInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EvaluationVersionUpdateCache', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam celkových hodnocení
     * @return RatingAllOutput[]
     */
    public function RatingAll(RatingAllInput $input = new RatingAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RatingAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RatingAllOutput => RatingAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit celkové hodnocení
     */
    public function RatingUpdate(RatingUpdateInput $input = new RatingUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RatingUpdate', OperationRequest::from($input->toArray()));
    }

}
