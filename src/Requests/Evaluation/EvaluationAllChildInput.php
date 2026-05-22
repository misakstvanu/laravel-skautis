<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllChildInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?bool $isUnit = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'IsUnit' => $this->isUnit,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
