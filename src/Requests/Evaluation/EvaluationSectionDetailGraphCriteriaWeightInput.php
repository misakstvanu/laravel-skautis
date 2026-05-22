<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSectionDetailGraphCriteriaWeightInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluation = null,
        public readonly ?string $graphColor = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Evaluation' => $this->idEvaluation,
            'GraphColor' => $this->graphColor,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
