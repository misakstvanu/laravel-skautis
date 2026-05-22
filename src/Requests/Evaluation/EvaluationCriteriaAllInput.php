<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationCriteriaAllInput
{
    public function __construct(
        public readonly ?int $idEvaluationSet = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationSet' => $this->idEvaluationSet,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
