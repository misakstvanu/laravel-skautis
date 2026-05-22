<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAnswerAllShiftOutput
{
    public function __construct(
        public readonly ?string $order = null,
        public readonly ?string $evaluationCriteria = null,
        public readonly ?string $shift = null,
        public readonly ?int $rowNumber = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            order: isset($obj->{'Order'}) ? (string) $obj->{'Order'} : null,
            evaluationCriteria: isset($obj->{'EvaluationCriteria'}) ? (string) $obj->{'EvaluationCriteria'} : null,
            shift: isset($obj->{'Shift'}) ? (string) $obj->{'Shift'} : null,
            rowNumber: isset($obj->{'RowNumber'}) ? (int) $obj->{'RowNumber'} : null,
        );
    }
}
