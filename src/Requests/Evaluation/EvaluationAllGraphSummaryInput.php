<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllGraphSummaryInput
{
    public function __construct(
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?int $year = null,
        public readonly ?bool $drawGraph = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            'Year' => $this->year,
            'DrawGraph' => $this->drawGraph,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
