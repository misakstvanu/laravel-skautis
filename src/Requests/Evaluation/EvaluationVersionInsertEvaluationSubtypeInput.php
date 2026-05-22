<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationVersionInsertEvaluationSubtypeInput
{
    public function __construct(
        public readonly ?int $idEvaluationSubtype = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
