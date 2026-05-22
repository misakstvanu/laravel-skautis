<?php

namespace Misakstvanu\LaravelSkautis\Requests\Reports;

final class GrantHeadquartersUniversalInput
{
    public function __construct(
        public readonly ?int $year = null,
        public readonly ?string $idGrantState = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Year' => $this->year,
            'ID_GrantState' => $this->idGrantState,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
