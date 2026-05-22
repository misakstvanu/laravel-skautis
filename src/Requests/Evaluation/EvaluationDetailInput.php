<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationDetailInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationPerson' => $this->idEvaluationPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
