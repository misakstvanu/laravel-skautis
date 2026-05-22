<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationAllCompareInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?bool $drawGraph = null,
        public readonly ?string $culture = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'DrawGraph' => $this->drawGraph,
            'Culture' => $this->culture,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
