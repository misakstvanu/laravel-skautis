<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAnswerAllShiftInput
{
    public function __construct(
        public readonly ?int $idEvaluation = null,
        public readonly ?int $idEvaluationSection = null,
        public readonly ?int $count = null,
        public readonly ?int $rowMin = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Evaluation' => $this->idEvaluation,
            'ID_EvaluationSection' => $this->idEvaluationSection,
            'Count' => $this->count,
            'RowMin' => $this->rowMin,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
