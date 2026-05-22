<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationPersonAllEvaluationInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluation = null,
        public readonly ?int $idPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Evaluation' => $this->idEvaluation,
            'ID_Person' => $this->idPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
