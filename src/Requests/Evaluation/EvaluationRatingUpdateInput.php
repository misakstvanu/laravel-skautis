<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationRatingUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $displayName = null,
        public readonly ?float $scoreFrom = null,
        public readonly ?float $scoreTo = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EvaluationVersion' => $this->idEvaluationVersion,
            'DisplayName' => $this->displayName,
            'ScoreFrom' => $this->scoreFrom,
            'ScoreTo' => $this->scoreTo,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
