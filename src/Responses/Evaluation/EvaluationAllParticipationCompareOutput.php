<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllParticipationCompareOutput
{
    public function __construct(
        public readonly ?string $evaluationTypeID = null,
        public readonly ?string $evaluationType = null,
        public readonly ?int $absoluteIncrement = null,
        public readonly ?float $relativeIncrement = null,
        public readonly ?bool $incrementIsIncrease = null,
        public readonly ?int $absoluteDecrement = null,
        public readonly ?float $relativeDecrement = null,
        public readonly ?bool $decrementIsIncrease = null,
        public readonly ?int $absoluteRepeat = null,
        public readonly ?float $relativeRepeat = null,
        public readonly ?bool $repeatIsIncrease = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            evaluationTypeID: isset($obj->{'EvaluationTypeID'}) ? (string) $obj->{'EvaluationTypeID'} : null,
            evaluationType: isset($obj->{'EvaluationType'}) ? (string) $obj->{'EvaluationType'} : null,
            absoluteIncrement: isset($obj->{'AbsoluteIncrement'}) ? (int) $obj->{'AbsoluteIncrement'} : null,
            relativeIncrement: isset($obj->{'RelativeIncrement'}) ? (float) $obj->{'RelativeIncrement'} : null,
            incrementIsIncrease: isset($obj->{'IncrementIsIncrease'}) ? (bool) $obj->{'IncrementIsIncrease'} : null,
            absoluteDecrement: isset($obj->{'AbsoluteDecrement'}) ? (int) $obj->{'AbsoluteDecrement'} : null,
            relativeDecrement: isset($obj->{'RelativeDecrement'}) ? (float) $obj->{'RelativeDecrement'} : null,
            decrementIsIncrease: isset($obj->{'DecrementIsIncrease'}) ? (bool) $obj->{'DecrementIsIncrease'} : null,
            absoluteRepeat: isset($obj->{'AbsoluteRepeat'}) ? (int) $obj->{'AbsoluteRepeat'} : null,
            relativeRepeat: isset($obj->{'RelativeRepeat'}) ? (float) $obj->{'RelativeRepeat'} : null,
            repeatIsIncrease: isset($obj->{'RepeatIsIncrease'}) ? (bool) $obj->{'RepeatIsIncrease'} : null,
        );
    }
}
