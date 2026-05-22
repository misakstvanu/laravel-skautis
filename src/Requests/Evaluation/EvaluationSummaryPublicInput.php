<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationSummaryPublicInput
{
    public function __construct(
        public readonly ?int $int = null,
        public readonly ?int $year = null,
        public readonly ?string $idUnitType = null,
        public readonly ?int $idEvaluationSubtype = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'int' => $this->int,
            'Year' => $this->year,
            'ID_UnitType' => $this->idUnitType,
            'ID_EvaluationSubtype' => $this->idEvaluationSubtype,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
