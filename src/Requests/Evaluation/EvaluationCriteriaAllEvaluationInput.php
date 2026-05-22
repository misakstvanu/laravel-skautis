<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationCriteriaAllEvaluationInput
{
    public function __construct(
        public readonly ?int $idEvaluation = null,
        public readonly ?int $idEvaluationSection = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Evaluation' => $this->idEvaluation,
            'ID_EvaluationSection' => $this->idEvaluationSection,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
