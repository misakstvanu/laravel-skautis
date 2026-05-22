<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllDegradationCountInput
{
    public function __construct(
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
