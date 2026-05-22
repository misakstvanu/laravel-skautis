<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationCriteriaUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $evaluationSet = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?float $weight = null,
        public readonly ?string $answer1 = null,
        public readonly ?string $shift1 = null,
        public readonly ?string $answer2 = null,
        public readonly ?string $shift2 = null,
        public readonly ?string $answer3 = null,
        public readonly ?string $shift3 = null,
        public readonly ?string $answer4 = null,
        public readonly ?string $note = null,
        public readonly ?string $idEvaluationVersionState = null,
        public readonly ?string $evaluationVersionState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationSet' => $this->idEvaluationSet,
            'EvaluationSet' => $this->evaluationSet,
            'DisplayName' => $this->displayName,
            'Order' => $this->order,
            'Weight' => $this->weight,
            'Answer1' => $this->answer1,
            'Shift1' => $this->shift1,
            'Answer2' => $this->answer2,
            'Shift2' => $this->shift2,
            'Answer3' => $this->answer3,
            'Shift3' => $this->shift3,
            'Answer4' => $this->answer4,
            'Note' => $this->note,
            'ID_EvaluationVersionState' => $this->idEvaluationVersionState,
            'EvaluationVersionState' => $this->evaluationVersionState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
