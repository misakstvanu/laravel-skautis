<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class EvaluationShiftTableInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $mostImportant = null,
        public readonly ?string $format = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'MostImportant' => $this->mostImportant,
            'Format' => $this->format,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
