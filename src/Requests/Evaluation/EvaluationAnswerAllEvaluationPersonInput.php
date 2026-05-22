<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAnswerAllEvaluationPersonInput
{
    public function __construct(
        public readonly ?int $idEvaluationPerson = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationPerson' => $this->idEvaluationPerson,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
