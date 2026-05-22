<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllStabilityCountOutput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
        public readonly ?string $evaluationType = null,
        public readonly ?int $count1 = null,
        public readonly ?float $ratio1 = null,
        public readonly ?bool $isIncrease1 = null,
        public readonly ?int $count2 = null,
        public readonly ?float $ratio2 = null,
        public readonly ?bool $isIncrease2 = null,
        public readonly ?int $count3 = null,
        public readonly ?float $ratio3 = null,
        public readonly ?bool $isIncrease3 = null,
        public readonly ?int $count4 = null,
        public readonly ?float $ratio4 = null,
        public readonly ?bool $isIncrease4 = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationTypeID: isset($obj->{'EvaluationTypeID'}) ? (string) $obj->{'EvaluationTypeID'} : null,
            evaluationType: isset($obj->{'EvaluationType'}) ? (string) $obj->{'EvaluationType'} : null,
            count1: isset($obj->{'Count1'}) ? (int) $obj->{'Count1'} : null,
            ratio1: isset($obj->{'Ratio1'}) ? (float) $obj->{'Ratio1'} : null,
            isIncrease1: isset($obj->{'IsIncrease1'}) ? (bool) $obj->{'IsIncrease1'} : null,
            count2: isset($obj->{'Count2'}) ? (int) $obj->{'Count2'} : null,
            ratio2: isset($obj->{'Ratio2'}) ? (float) $obj->{'Ratio2'} : null,
            isIncrease2: isset($obj->{'IsIncrease2'}) ? (bool) $obj->{'IsIncrease2'} : null,
            count3: isset($obj->{'Count3'}) ? (int) $obj->{'Count3'} : null,
            ratio3: isset($obj->{'Ratio3'}) ? (float) $obj->{'Ratio3'} : null,
            isIncrease3: isset($obj->{'IsIncrease3'}) ? (bool) $obj->{'IsIncrease3'} : null,
            count4: isset($obj->{'Count4'}) ? (int) $obj->{'Count4'} : null,
            ratio4: isset($obj->{'Ratio4'}) ? (float) $obj->{'Ratio4'} : null,
            isIncrease4: isset($obj->{'IsIncrease4'}) ? (bool) $obj->{'IsIncrease4'} : null,
        );
    }
}
