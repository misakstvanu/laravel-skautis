<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllTypeCountInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $evaluationTypeID = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'EvaluationTypeID' => $this->evaluationTypeID,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
