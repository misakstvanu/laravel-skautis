<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationVersionAllInput
{
    public function __construct(
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $idEvaluationVersionState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            'ID_EvaluationVersionState' => $this->idEvaluationVersionState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
