<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class EvaluationCompareInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $culture = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'Culture' => $this->culture,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
