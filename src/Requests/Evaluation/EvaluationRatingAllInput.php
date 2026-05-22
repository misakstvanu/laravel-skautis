<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationRatingAllInput
{
    public function __construct(
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $displayName = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            'DisplayName' => $this->displayName,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
