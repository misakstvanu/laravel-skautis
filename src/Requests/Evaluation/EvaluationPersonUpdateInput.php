<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationPersonUpdateInput
{
    public function __construct(
        public readonly ?int $idEvaluationCriteria = null,
        public readonly ?float $answer = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationCriteria' => $this->idEvaluationCriteria,
            'Answer' => $this->answer,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
