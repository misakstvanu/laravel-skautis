<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAnswerAllInput
{
    public function __construct(
        public readonly ?int $idEvaluation = null,
        public readonly ?bool $evaluationPersonCount = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Evaluation' => $this->idEvaluation,
            'EvaluationPersonCount' => $this->evaluationPersonCount,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
