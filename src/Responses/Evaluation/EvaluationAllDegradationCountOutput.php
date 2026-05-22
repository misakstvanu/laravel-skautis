<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllDegradationCountOutput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
        public readonly ?string $evaluationType = null,
        public readonly ?int $countGood = null,
        public readonly ?float $ratioGood = null,
        public readonly ?bool $isIncreaseGood = null,
        public readonly ?int $countUnderAverage = null,
        public readonly ?float $ratioUnderAverage = null,
        public readonly ?bool $isIncreaseUnderAverage = null,
        public readonly ?int $countBad = null,
        public readonly ?float $ratioBad = null,
        public readonly ?bool $isIncreaseBad = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationTypeID: isset($obj->{'EvaluationTypeID'}) ? (string) $obj->{'EvaluationTypeID'} : null,
            evaluationType: isset($obj->{'EvaluationType'}) ? (string) $obj->{'EvaluationType'} : null,
            countGood: isset($obj->{'CountGood'}) ? (int) $obj->{'CountGood'} : null,
            ratioGood: isset($obj->{'RatioGood'}) ? (float) $obj->{'RatioGood'} : null,
            isIncreaseGood: isset($obj->{'IsIncreaseGood'}) ? (bool) $obj->{'IsIncreaseGood'} : null,
            countUnderAverage: isset($obj->{'CountUnderAverage'}) ? (int) $obj->{'CountUnderAverage'} : null,
            ratioUnderAverage: isset($obj->{'RatioUnderAverage'}) ? (float) $obj->{'RatioUnderAverage'} : null,
            isIncreaseUnderAverage: isset($obj->{'IsIncreaseUnderAverage'}) ? (bool) $obj->{'IsIncreaseUnderAverage'} : null,
            countBad: isset($obj->{'CountBad'}) ? (int) $obj->{'CountBad'} : null,
            ratioBad: isset($obj->{'RatioBad'}) ? (float) $obj->{'RatioBad'} : null,
            isIncreaseBad: isset($obj->{'IsIncreaseBad'}) ? (bool) $obj->{'IsIncreaseBad'} : null,
        );
    }
}
