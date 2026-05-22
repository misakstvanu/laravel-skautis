<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllImprovementCountOutput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
        public readonly ?string $evaluationType = null,
        public readonly ?int $countBad = null,
        public readonly ?float $ratioBad = null,
        public readonly ?bool $isIncreaseBad = null,
        public readonly ?int $countAboveAverage = null,
        public readonly ?float $ratioAboveAverage = null,
        public readonly ?bool $isIncreaseAboveAverage = null,
        public readonly ?int $countGood = null,
        public readonly ?float $ratioGood = null,
        public readonly ?bool $isIncreaseGood = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationTypeID: isset($obj->{'EvaluationTypeID'}) ? (string) $obj->{'EvaluationTypeID'} : null,
            evaluationType: isset($obj->{'EvaluationType'}) ? (string) $obj->{'EvaluationType'} : null,
            countBad: isset($obj->{'CountBad'}) ? (int) $obj->{'CountBad'} : null,
            ratioBad: isset($obj->{'RatioBad'}) ? (float) $obj->{'RatioBad'} : null,
            isIncreaseBad: isset($obj->{'IsIncreaseBad'}) ? (bool) $obj->{'IsIncreaseBad'} : null,
            countAboveAverage: isset($obj->{'CountAboveAverage'}) ? (int) $obj->{'CountAboveAverage'} : null,
            ratioAboveAverage: isset($obj->{'RatioAboveAverage'}) ? (float) $obj->{'RatioAboveAverage'} : null,
            isIncreaseAboveAverage: isset($obj->{'IsIncreaseAboveAverage'}) ? (bool) $obj->{'IsIncreaseAboveAverage'} : null,
            countGood: isset($obj->{'CountGood'}) ? (int) $obj->{'CountGood'} : null,
            ratioGood: isset($obj->{'RatioGood'}) ? (float) $obj->{'RatioGood'} : null,
            isIncreaseGood: isset($obj->{'IsIncreaseGood'}) ? (bool) $obj->{'IsIncreaseGood'} : null,
        );
    }
}
