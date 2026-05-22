<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationPersonInsertInput
{
    public function __construct(
        public readonly ?int $idEvaluation = null,
        public readonly ?int $idPerson = null,
        public readonly ?int $idEvent = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Evaluation' => $this->idEvaluation,
            'ID_Person' => $this->idPerson,
            'ID_Event' => $this->idEvent,
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
