<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllParticipationOutput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
        public readonly ?string $evaluationType = null,
        public readonly ?int $allObject = null,
        public readonly ?int $openEvaluation = null,
        public readonly ?float $relativeOpenEvaluation = null,
        public readonly ?bool $isIncreaseOpenEvaluation = null,
        public readonly ?int $closedEvaluation = null,
        public readonly ?float $relativeClosedEvaluation = null,
        public readonly ?bool $isIncreaseClosedEvaluation = null,
        public readonly ?int $allEvaluationObject = null,
        public readonly ?float $relativeAllEvaluationObject = null,
        public readonly ?bool $isIncrease = null,
        public readonly ?int $lastAllObject = null,
        public readonly ?int $lastOpenEvaluation = null,
        public readonly ?float $lastRelativeOpenEvaluation = null,
        public readonly ?bool $lastIsIncreaseOpenEvaluation = null,
        public readonly ?int $lastClosedEvaluation = null,
        public readonly ?float $lastRelativeClosedEvaluation = null,
        public readonly ?bool $lastIsIncreaseClosedEvaluation = null,
        public readonly ?int $lastAllEvaluationObject = null,
        public readonly ?float $lastRelativeAllEvaluationObject = null,
        public readonly ?bool $lastIsIncrease = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationTypeID: isset($obj->{'EvaluationTypeID'}) ? (string) $obj->{'EvaluationTypeID'} : null,
            evaluationType: isset($obj->{'EvaluationType'}) ? (string) $obj->{'EvaluationType'} : null,
            allObject: isset($obj->{'AllObject'}) ? (int) $obj->{'AllObject'} : null,
            openEvaluation: isset($obj->{'OpenEvaluation'}) ? (int) $obj->{'OpenEvaluation'} : null,
            relativeOpenEvaluation: isset($obj->{'RelativeOpenEvaluation'}) ? (float) $obj->{'RelativeOpenEvaluation'} : null,
            isIncreaseOpenEvaluation: isset($obj->{'IsIncreaseOpenEvaluation'}) ? (bool) $obj->{'IsIncreaseOpenEvaluation'} : null,
            closedEvaluation: isset($obj->{'ClosedEvaluation'}) ? (int) $obj->{'ClosedEvaluation'} : null,
            relativeClosedEvaluation: isset($obj->{'RelativeClosedEvaluation'}) ? (float) $obj->{'RelativeClosedEvaluation'} : null,
            isIncreaseClosedEvaluation: isset($obj->{'IsIncreaseClosedEvaluation'}) ? (bool) $obj->{'IsIncreaseClosedEvaluation'} : null,
            allEvaluationObject: isset($obj->{'AllEvaluationObject'}) ? (int) $obj->{'AllEvaluationObject'} : null,
            relativeAllEvaluationObject: isset($obj->{'RelativeAllEvaluationObject'}) ? (float) $obj->{'RelativeAllEvaluationObject'} : null,
            isIncrease: isset($obj->{'IsIncrease'}) ? (bool) $obj->{'IsIncrease'} : null,
            lastAllObject: isset($obj->{'LastAllObject'}) ? (int) $obj->{'LastAllObject'} : null,
            lastOpenEvaluation: isset($obj->{'LastOpenEvaluation'}) ? (int) $obj->{'LastOpenEvaluation'} : null,
            lastRelativeOpenEvaluation: isset($obj->{'LastRelativeOpenEvaluation'}) ? (float) $obj->{'LastRelativeOpenEvaluation'} : null,
            lastIsIncreaseOpenEvaluation: isset($obj->{'LastIsIncreaseOpenEvaluation'}) ? (bool) $obj->{'LastIsIncreaseOpenEvaluation'} : null,
            lastClosedEvaluation: isset($obj->{'LastClosedEvaluation'}) ? (int) $obj->{'LastClosedEvaluation'} : null,
            lastRelativeClosedEvaluation: isset($obj->{'LastRelativeClosedEvaluation'}) ? (float) $obj->{'LastRelativeClosedEvaluation'} : null,
            lastIsIncreaseClosedEvaluation: isset($obj->{'LastIsIncreaseClosedEvaluation'}) ? (bool) $obj->{'LastIsIncreaseClosedEvaluation'} : null,
            lastAllEvaluationObject: isset($obj->{'LastAllEvaluationObject'}) ? (int) $obj->{'LastAllEvaluationObject'} : null,
            lastRelativeAllEvaluationObject: isset($obj->{'LastRelativeAllEvaluationObject'}) ? (float) $obj->{'LastRelativeAllEvaluationObject'} : null,
            lastIsIncrease: isset($obj->{'LastIsIncrease'}) ? (bool) $obj->{'LastIsIncrease'} : null,
        );
    }
}
