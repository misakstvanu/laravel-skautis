<?php

namespace Misakstvanu\LaravelSkautis\Requests\Evaluation;

final class EvaluationDetailCompareInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $drawGraph = null,
        public readonly ?string $culture = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DrawGraph' => $this->drawGraph,
            'Culture' => $this->culture,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
